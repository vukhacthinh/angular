<?php
declare(strict_types=1);

namespace App\Controller;

use Cake\Collection\Collection;
use Cake\Http\Cookie\CookieCollection;
use Cake\Http\ServerRequest;
use http\Env\Request;

/**
 * Employees Controller
 *
 * @property \App\Model\Table\EmployeesTable $Employees
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
//        $abc = $this->request->getCookieCollection()->get('csrfToken')->getScalarValue();
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
}
