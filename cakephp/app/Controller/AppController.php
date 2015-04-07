<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 */

App::uses('Controller', 'Controller');
App::uses('SimplePasswordHasher', 'Component/Auth');
/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {

		public $components = array(
			    'Auth' => array(
			    	'loginAction' => array(
	                'controller' => 'users',
	                'action' => 'login',
	                'admin' => false,
	                'customer' => false
	            ),
			    'logoutRedirect' => array(
	                'controller' => 'pages',
	                'action' => 'diplay', 'home',
	                'admin' => false,
	                'customer' => false
	            ),
		        'authenticate' => array(
		            'Form' => array(
		            	'fields' => array('username'=> 'email'),
		            	'passwordHasher' => array(
		                    'className' => 'Simple',
		                    'hashType' => 'sha256'
		                )
		            )
		        )
		    ),
		    'Session'
		);

	    public function beforeFilter() {
	        if (!isset($this->request->params['prefix']))
	            $this->Auth->allow('login', 'logout', 'display');
	        if (isset($this->request->params['prefix']) && $this->request->params['prefix'] == 'admin')
	            $this->layout = 'admin';
	    }


}
