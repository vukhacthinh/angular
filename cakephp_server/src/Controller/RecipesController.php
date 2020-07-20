<?php
declare(strict_types=1);

namespace App\Controller;

use Cake\Event\Event;

/**
 * Recipes Controller
 *
 * @method \App\Model\Entity\Recipe[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 * @property \App\Model\Table\EmployeesTable $Employees
 */
// src/Controller/RecipesController.php
use Cake\Event\EventInterface;
use Cake\TestSuite\IntegrationTestTrait;
class RecipesController extends AppController
{
    public function initialize() : void
    {
        parent::initialize();
        $this->loadComponent('RequestHandler');
    }
//    public $uses = array('Phone');
//    public $helpers = array('Html', 'Form');
//    public $components = array('RequestHandler');
    public function index()
    {
        if($this->request->is('post')){
            $recipes = $this->Employees->find('all');
            return $this->responseJson($recipes);
        }
        $recipes = $this->Employees->find('all');
        return $this->responseJson($recipes);
//        $this->set([
//            'recipes' => $recipes,
//            '_serialize' => ['recipes']
//        ]);
    }

    public function view($id)
    {
        $recipe = $this->Employees->get($id);
        $this->set([
            'recipe' => $recipe,
            '_serialize' => ['recipe']
        ]);
    }

    public function add()
    {
        $this->request->allowMethod(['post', 'put']);
        $recipe = $this->Employees->newEntity($this->request->getData());
        if ($this->Employees->save($recipe)) {
            $message = 'Saved';
        } else {
            $message = 'Error';
        }
        $this->set([
            'message' => $message,
            'recipe' => $recipe,
            '_serialize' => ['message', 'recipe']
        ]);
    }

    public function edit($id)
    {
        $this->request->allowMethod(['patch', 'post', 'put']);
        $recipe = $this->Employees->get($id);
        $recipe = $this->Employees->patchEntity($recipe, $this->request->getData());
        if ($this->Employees->save($recipe)) {
            $message = 'Saved';
        } else {
            $message = 'Error';
        }
        $this->set([
            'message' => $message,
            '_serialize' => ['message']
        ]);
    }

    public function delete($id)
    {
        $this->request->allowMethod(['delete']);
        $recipe = $this->Employees->get($id);
        $message = 'Deleted';
        if (!$this->Employees->delete($recipe)) {
            $message = 'Error';
        }
        $this->set([
            'message' => $message,
            '_serialize' => ['message']
        ]);
    }
}
