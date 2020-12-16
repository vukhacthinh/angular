<?php
declare(strict_types=1);

namespace App\Controller;

use Cake\Collection\Collection;
use Cake\Datasource\ConnectionManager;
use Cake\Http\Cookie\CookieCollection;
use Cake\Http\ServerRequest;
use Cake\Routing\Router;
use http\Env\Request;

/**
 * Employees Controller
 *
 * @property \App\Model\Table\EmployeesTable $Employees
 * @property \App\Model\Table\CheckinCheckOutsTable $CheckinCheckOuts
 * * @property \App\Model\Table\EmployeeTimeTablesTable $EmployeeTimeTables
 * * @property \App\Model\Table\CompanySectionsTable $CompanySections
 * * @property \App\Model\Table\EmployeePostsTable $EmployeePosts
 * * @property \App\Model\Table\EmployeePostCommentsTable $EmployeePostComments
 * @method \App\Model\Entity\Employee[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class EmployeesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
//        dd('ss');
//        $arr = [
//            1=>['bumon_id' =>21,'name'=>'aaa'],
//            2=>['bumon_id' =>21,'name'=>'bbb'],
//            3=>['bumon_id' =>21,'name'=>'ccc'],
//            4=>['bumon_id' =>21,'name'=>'ddd'],
//            5=>['bumon_id' =>21,'name'=>'eee'],
//            6=>['bumon_id' =>21,'name'=>'fff'],
//            7=>['bumon_id' =>21,'name'=>'ggg'],
//            8=>['bumon_id' =>31,'name'=>'hhh'],
//            9=>['bumon_id' =>31,'name'=>'jjj'],
//            10=>['bumon_id' =>31,'name'=>'kkk'],
//            11=>['bumon_id' =>31,'name'=>'lll'],
//            12=>['bumon_id' =>31,'name'=>'ppp'],
//            13=>['bumon_id' =>41,'name'=>'ppp'],
//        ];
////        dd($arr);
//        $arr1 = [];
//        $keyParent = [];
//        foreach ($arr as $key => $value)
//        {
//            $keyParent[$value['bumon_id']] = $value['bumon_id'];
//        }
////        dd($keyParent);
//        foreach ($keyParent as $key => $value)
//        {
//            foreach ($arr as $k => $v){
//                if($v['bumon_id'] == $value){
//                    $arr1["{$v['bumon_id']}"][$k] = $v;
//                }
//            }
//
//        }
//        dd($arr1);
//        dd($keyParent);
//        dd('ss');
        $this->paginate = [];
        $employees = $this->Employees->find()->orderAsc('employee_code');
        return $this->responseJson($employees);
//        $this->set(compact('employees'));
    }

    /**
     * View method
     *
     * @param string|null $id Employee id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $employee = $this->Employees->get($id, []);
        return $this->responseJson($employee);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $employee = $this->Employees->newEntity([]);
        if ($this->request->is('post')) {
            $employee = $this->Employees->patchEntity($employee, $this->request->getData());
            if ($this->Employees->save($employee)) {
                return $this->responseJson(['msg'=>'The employee has been saved.','status'=>200],200);
            }
            return $this->responseJson(['msg'=>'The employee could not be saved. Please, try again.','status'=>409],409);
        }
    }

    /**
     * Edit method
     *
     * @param string|null $id Employee id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $employee = $this->Employees->get($id);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $employee = $this->Employees->patchEntity($employee, $this->request->getData());
            if ($this->Employees->save($employee)) {

                return $this->responseJson(['msg'=>'The employee has been saved.'],200);
            }
            return $this->responseJson(['msg'=>'The employee could not be saved. Please, try again.'],409);
        }
    }

    /**
     * Delete method
     *
     * @param string|null $id Employee id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $employee = $this->Employees->get($id);
        if ($this->Employees->delete($employee)) {
            return $this->responseJson(['message' => __('The employee has been deleted.')]);
        } else {
            return $this->responseJson(['message' => __('The employee could not be deleted. Please, try again.')]);
        }
    }
    public function cookie()
    {
//        $abc = new ServerRequest();
//        $a = $abc->getCookieCollection();
        $abc = $this->request->getCookieCollection();
        $abc = new Collection($abc);

        $token = $abc->first()->getValue();
        return $this->responseJson(['csrfToken'=>$token]);
    }
    public function syncTimeSheet($employee_id){
        $listCheckInout = $this->CheckinCheckOuts->find()->where(['employee_id'=>$employee_id]);
        $list = [];
        $timeTable = $this->EmployeeTimeTables->find()->where(['employee_id'=>$employee_id])->first();
        foreach ($listCheckInout as $key => $value)
        {
            $list["{$value->work_date}"]['check_in'] = $value->check_in;
            $list["{$value->work_date}"]['check_out'] = $value->check_out;

            if($value->work_date == date('Y-m-d')){
                $list["{$value->work_date}"]['today'] = true;
            }
        }
        if($timeTable){
            $list[0] = $timeTable->mo;
            $list[1] = $timeTable->tu;
            $list[2] = $timeTable->we;
            $list[3] = $timeTable->th;
            $list[4] = $timeTable->fr;
            $list[5] = $timeTable->sa;
            $list[6] = $timeTable->su;
        }
        return $this->responseJson($list);
    }
    public function checkin($employee_id){

        $data =
            [
                'employee_id'=>$employee_id,
                'check_in'=>date('H:i'),
                'work_date'=>date('Y-m-d'),
                'checkin_type'=>1
            ];
        $newE = $this->CheckinCheckOuts->newEntity($data);
        $patchE = $this->CheckinCheckOuts->patchEntity($newE,$data);
        $count = $this->CheckinCheckOuts->find()->where(['employee_id'=>$employee_id,'work_date'=>date('Y-m-d')])->first();
        if($count){
            return $this->responseJson('Had Been CheckIn',409);
        }
        if($this->CheckinCheckOuts->save($patchE))
        {
            return $this->responseJson('Oke',200);
        }
        return $this->responseJson('Save Fail',409);
    }
    public function checkout($employee_id){
        $data =
            [
                'employee_id'=>$employee_id,
                'check_out'=>date('H:i'),
                'work_date'=>date('Y-m-d'),
            ];
        $exist = $this->CheckinCheckOuts->find()->where(['employee_id'=>$employee_id,'work_date'=>date('Y-m-d')])->first();
        $patchE = $this->CheckinCheckOuts->patchEntity($exist,$data);
        if($this->CheckinCheckOuts->save($patchE))
        {
            return $this->responseJson('Oke',200);
        }
        return $this->responseJson('Save Fail',409);
    }
    public function company(){
        $company = $this->CompanySections->find();
        return $this->responseJson($company);
    }
    public function savePost(){
        $data = $this->request->getData();
        $idPost = $this->EmployeePosts->find()->orderDesc('id')->first();
        $newEntity = $this->EmployeePosts->newEntity([]);
        if($data){
            $img = $data['file'];
            $conn = ConnectionManager::get('default');
            try {
                $conn->begin();
                if (preg_match('/^data:image\/(\w+);base64,/', $img, $type)) {
                    $img = substr($img, strpos($img, ',') + 1);
                    $type = strtolower($type[1]); // jpg, png, gif

                    if (!in_array($type, [ 'jpg', 'jpeg', 'gif', 'png' ])) {
                        return $this->responseJson('invalid image type');
                    }
                    $img = str_replace( ' ', '+', $img );
                    $img = base64_decode($img);

                    if ($img === false) {
                        return $this->responseJson('base64_decode failed');
                    }

                } else {
                    return $this->responseJson('did not match data URI with image data');
                }

                $id = 1;
                if($idPost){
                    $id = $idPost->id +1;
                }
                $hostName = Router::url('/', true);
                $path = WWW_ROOT."tmp\post_image_{$id}.{$type}";
                $dataSave = [
                  'employee_id' =>   $data['employee_id'],
                  'content' =>   $data['content'],
                  'file' =>   $hostName."tmp\post_image_{$id}.{$type}",
                ];

                $patchEntity = $this->EmployeePosts->patchEntity($newEntity,$dataSave);
                $this->EmployeePosts->save($patchEntity, ['atomic' => false]);
                file_put_contents($path, $img);
                $conn->commit();
            }catch (\Exception $exception){
//                $conn->rollback();
                throw $exception;
            }



        }

        return $this->responseJson('success',200);
    }
    public function getPost($employee_id){
        $data = $this->EmployeePosts->find()->contain('DetailPost')->where(['employee_id'=>$employee_id]);
        return $this->responseJson($data,200);
    }
    public function addComment(){
        $data = $this->request->getData();
        $new = $this->EmployeePostComments->newEntity($data);
        $patch = $this->EmployeePostComments->patchEntity($new,$data);

        if($data){
            if($this->EmployeePostComments->saveOrFail($patch)){
                return $this->responseJson('success',200);
            }
            return $this->responseJson('error',209);
        }
        return $this->responseJson('error',209);
    }
    public function addLike(){
        $data = $this->request->getData();
        $new = $this->EmployeePostComments->newEntity($data);
        $patch = $this->EmployeePostComments->patchEntity($new,$data);

        if($data){
            if($this->EmployeePostComments->saveOrFail($patch)){
                return $this->responseJson('success',200);
            }
            return $this->responseJson('error',209);
        }
        return $this->responseJson('error',209);
    }
}

