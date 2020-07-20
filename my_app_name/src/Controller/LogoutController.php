<?php
namespace App\Controller;

use Cake\Cache\Cache;

class LogoutController extends AppController
{

    public function initialize() : void
    {
        parent::initialize();
    }

    public function index()
    {
    	$url_logout = $this->Auth->logout();
    	$session = $this->request->getSession();
    	$session->destroy();
//    	Cache::clearAll();
//    	Cache::delete('current_user');
        return $this->redirect($url_logout);
    }
}
