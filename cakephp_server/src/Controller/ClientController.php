<?php
declare(strict_types=1);

/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use Cake\Controller\Controller;
use Cake\I18n\Time;
use Cake\Event\EventInterface;
use Cake\Network\Socket;
/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @link https://book.cakephp.org/4/en/controllers.html#the-app-controller
 */
class ClientController extends AppController
{
    /**
     * Initialization hook method.
     *
     * Use this method to add common initialization code like loading components.
     *
     * e.g. `$this->loadComponent('FormProtection');`
     *
     * @return void
     */
    public $components = array('Security', 'RequestHandler');

    public function index(){

    }

    public function request_index(){

        // remotely post the information to the server
        $link =  "http://" . $_SERVER['HTTP_HOST'] . WWW_ROOT.'rest_phones.json';
         dd($link);

        $data = null;
        $httpSocket = new Socket();
        $response = $httpSocket->getConfig($link, $data );
        $this->set('response_code', $response->code);
        $this->set('response_body', $response->body);

        $this -> render('/Client/request_response');
    }

    public function request_view($id){

        // remotely post the information to the server
        $link =  "http://" . $_SERVER['HTTP_HOST'] . WWW_ROOT.'rest_phones/'.$id.'.json';

        $data = null;
        $httpSocket = new Socket();
        $response = $httpSocket->getConfig($link, $data );
        $this->set('response_code', $response->code);
        $this->set('response_body', $response->body);

        $this -> render('/Client/request_response');
    }

    public function request_edit($id){

        // remotely post the information to the server
        $link =  "http://" . $_SERVER['HTTP_HOST'] . WWW_ROOT.'rest_phones/'.$id.'.json';

        $data = null;
        $httpSocket = new Socket();
        $data['Phone']['name'] = 'Updated Phone Name';
        $data['Phone']['manufacturer'] = 'Updated Phone  Manufacturer';
        $data['Phone']['name'] = 'Updated Phone  Description';
        $response = $httpSocket->put($link, $data );
        $this->set('response_code', $response->code);
        $this->set('response_body', $response->body);

        $this -> render('/Client/request_response');
    }

    public function request_add(){

        // remotely post the information to the server
        $link =  "http://" . $_SERVER['HTTP_HOST'] . WWW_ROOT.'rest_phones.json';

        $data = null;
        $httpSocket = new Socket();
        $data['Phone']['name'] = 'New Phone';
        $data['Phone']['manufacturer'] = 'New Phone Manufacturer';
        $data['Phone']['name'] = 'New Phone Description';
        $response = $httpSocket->post($link, $data );
        $this->set('response_code', $response->code);
        $this->set('response_body', $response->body);

        $this -> render('/Client/request_response');
    }

    public function request_delete($id){

        // remotely post the information to the server
        $link =  "http://" . $_SERVER['HTTP_HOST'] . WWW_ROOT.'rest_phones/'.$id.'.json';

        $data = null;
        $httpSocket = new Socket();
        $response = $httpSocket->delete($link, $data );
        $this->set('response_code', $response->code);
        $this->set('response_body', $response->body);

        $this -> render('/Client/request_response');
    }
}
