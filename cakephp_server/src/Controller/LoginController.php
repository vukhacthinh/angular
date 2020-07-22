<?php
namespace App\Controller;
require_once(ROOT . DS . 'vendor' . DS . 'mobiledetect' .DS.'mobiledetectlib'. DS . 'Mobile_Detect.php');

use App\Lib\Message;
use Cake\Auth\DefaultPasswordHasher;
use Cake\Controller\Component\AuthComponent;
use Cake\Log\Log;
use Cake\ORM\Query;
use Cake\ORM\TableRegistry;
use Cake\I18n\Time;
use App\Model\Entity\Employee;

/**
 * Login controller
 *
 * @property \App\Model\Table\EmployeesTable $Employees
 * @method \App\Model\Entity\Employee[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */

class LoginController extends AppController
{
    /**
     * @var \Cake\Datasource\RepositoryInterface|null
     */

    public function initialize(): void
    {
        parent::initialize(); // TODO: Change the autogenerated stub
        $this->loadModel('Employees');
        $this->viewBuilder()->disableAutoLayout();
    }

    /**
     *
     */
    public function index()
    {
        $listEmployee = $this->Employees->find();

        if ($this->request->is('post')) {
            $params = $this->request->getData();
            $abc = new DefaultPasswordHasher();
            $employeeLoginGet = $this->Employees->find()->where(['employee_code'=>$params['username']]);
            $response = $abc->check($params['password'],$employeeLoginGet->first()->password);
            if($response){
                return $this->responseJson($employeeLoginGet);
            }
            else{
                return false;
            }

            return $this->responseJson((new DefaultPasswordHasher())->hash('123456'));
            $employeeLogin = $this->Employees->find()->where(['employee_code'=>$params['username']]);
            if($employeeLogin){
                return $this->responseJson($employeeLogin);
            }
            return false;
            return $this->responseJson($params);
            $login = new Employee();
            $login = $this->Employees->PatchEntity($login, $params);
            if ($login->getErrors()) {
                //Write login log: failure
                $this->writeLoginLog($params['employee_code'], 2);
                //END Write login log
                $errors_valid = $login->errors();
                $this->set(compact('errors_valid'));
                $this->set('obj_login', $login);
            } else {
                $identify = $this->Auth->identify();
                //Validate lock
                $lock = $this->Employees->PatchEntity($login, $params);
                if ($lock->getErrors()) {
                    //Write login log: failure
                    $this->writeLoginLog($params['employee_code'], 3);
                    //END Write login log

                    $errors_valid = $lock->errors();
                    $this->set(compact('errors_valid'));
                    $this->set('obj_login', $lock);

                } else {
                    if ($identify) {//find user login in database
                        $user = $this->Employees->get($identify['id']);
                        $user->login_failed_count = 0;
                        $user->last_login_exec = date('Y-m-d H:i:s');

                        $storeUser = $this->Employees->get($identify['id'], [
                        ]);
                        //Set user ID to Session
                        $this->Auth->setUser($storeUser);
                        $this->Employees->save($user, array('loginupdate' => 1));

                        //Write login log: success
                        $user = $this->Employees->get($this->Auth->user()['id'])->toArray();
                        $this->writeLoginLog($user['employee_code'], 1);
                        //END Write login log
//                            $this->clearOldCookies();
                        return $this->redirect($params['redirect']);
                    } else {//cannot find user in database
                        $user = $this->Employees->getByLoginName($params['employee_code']);
                        //update user login failed count
                        if (!empty($user)) {
                            $user->login_failed_count = $user->login_failed_count + 1;
                            $user->last_login_exec = date('Y-m-d H:i:s');
                            $this->Employees->save($user, array('loginupdate' => 1));
                        }
                        $errors = __('pass_word or username not correct');//id or password is not correct
                        $this->set(compact('errors'));

                        //Write login log: failure
                        $this->writeLoginLog($params['employee_code'], 2);
                        //END Write login log
                    }
                }
//            }
            }
        }
//        $listEmployee = $this->Employees->find();
//        dd($this->responseJson($listEmployee));++++++++++++++++++
//            $this->Authorization->authorize($data, 'update');
//
//            $user = $this->Auth->identify();
//            if ($user) {
//                $this->Auth->setUser($user);
//                return $this->redirect($this->Auth->redirectUrl());
//            } else {
//                echo __('Username or password is incorrect');
//            }
    }
    public function abc()
    {
//        $abc = $this->Employees->newEntity([]);
        if ($this->Auth->User()) {
            return $this->redirect($this->Auth->redirectUrl());
        }
    }
//    private function clearOldCookies(){
//        foreach (\Constants::$cst_function['division'] as $k => $v){
//            $this->Cookie->delete('group_menu_'.$k);
//        }
//    }
    /**
     * Write login log if CST_LOGIN_LOG==1
     *
     * @param $result: 1=>SUCCESS, 2=>FAILURE, 3=>LOCKOUT
     * @return not return
     */
    public function writeLoginLog($login_name, $result)
    {
        if (CST_LOGIN_LOG == 1)
        {
            $currentDate = date("Y-m-d H:i:s");
            $IP = $this->request->clientIp();
            $rs = '';
            switch ($result) {
                case '1':
                    $rs = "SUCCESS";
                    break;
                case '2':
                    $rs = "FAILURE";
                    break;
                case '3':
                    $rs = "LOCKOUT";
                    break;
            }
            $content = <<<HD

	システム日時:  {$currentDate}
	アクセス元IPアドレス:  {$IP}
	区分:  LOGIN
	ログインID:  {$login_name}
	ログインチェック結果:  {$rs}
HD;
            Log::info($content, 'login');
        }
    }


}

