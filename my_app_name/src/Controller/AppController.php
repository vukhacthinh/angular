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
use Cake\Core\Configure;
use Cake\I18n\Time;
use Cake\Event\EventInterface;
use Cake\Http\Cookie\Cookie;
use Cake\Http\Cookie\CookieCollection;

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @link https://book.cakephp.org/4/en/controllers.html#the-app-controller
 */
class AppController extends Controller
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
    public function initialize(): void
    {
//        $this->response->withHeader('Access-Control-Allow-Origin', '*');
//        $this->all
        $cookie = new Cookie('csrfToken', 'my-csrf-token');
        $cookies = new CookieCollection([$cookie]);
        $cookies = $cookies->add($cookie);
        parent::initialize();
//        $this->loadComponent('Authorization.Authorization');
        $this->loadModel('Employees');
//        $this->loadComponent('Security');
//        $this->Auth->config('authenticate', ['Form']);
        /*
         * Enable the following component for recommended CakePHP form protection settings.
         * see https://book.cakephp.org/4/en/controllers/components/form-protection.html
         */
//        $this->loadComponent('FormProtection');
//        $this->loadComponent('Auth', [
//            'authenticate' => [
//                'Form' => [
//                    'userModel' => 'Employees',
//                    'fields' => ['employee_code' => 'username', 'password' => 'password'],
////                    'scope'  => ['Employee.status in ' => $login_status],
//                ]
//            ],
//            'loginAction' => [
//                'controller' => 'Login',
//                'action' => 'index'
//            ],
//            'loginRedirect' => [
//                'controller' => 'Dashboard',
//                'action' => 'index'
//            ],
//            'logoutRedirect' => [
//                'controller' => 'Login',
//                'action' => 'index'
//            ],
//            'unauthorizedRedirect' => $this->referer(),
//            'authError' => false,
//            'storage' => 'Session',
//        ]);
//        $this->Auth->allow(['display', 'view', 'index']);
    }
    public function beforeRender(\Cake\Event\EventInterface $event) {
        $this->setCorsHeaders();
    }

    public function beforeFilter(EventInterface $event) {
        parent::beforeFilter($event);

        if ($this->request->is('options')) {
            $this->setCorsHeaders();
            return $this->response;
        }
    }

    private function setCorsHeaders() {
        $this->response = $this->response->cors($this->request)
            ->allowOrigin(['*'])
            ->allowMethods(['*'])
            ->allowHeaders([ 'Origin', 'Content-Type', 'X-Auth-Token'])
            ->allowCredentials()
            ->exposeHeaders(['Link'])
            ->maxAge(300)
            ->build();
    }
    public function responseJson($queryData, $sttCode = 200){

        $item = json_encode($queryData);
        $body = $this->response->getBody();
        $body->write($item);
        return $this->response->withType('json')->withBody($body)->withStatus($sttCode);
    }
    public function identity() {
        return $this->getRequest()->getAttribute('identity');
    }

}
