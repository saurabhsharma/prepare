<?php
class AdminController extends AdminAppController {

	public $helpers = array('Html', 'Form', 'Session');
    public $components = array('Session');


	public function beforeFilter(){
		parent::beforeFilter();
    	$this->Auth->allow(array('index','login'));

  		$this->Auth->loginRedirect = '/admin/dashboard';
    	$this->Auth->logoutRedirect = '/admin/login';


    }

	public function index() {
	 
		if($this->Session->read('Auth.User') && $this->Session->read('Auth.User.role_id') == '1')
        {
        	//$this->redirect(array('admin'=>true,'controller' => 'users', 'action' => 'dashboard'));
            //$this->redirect(array('action' => 'dashboard'));
            //$this->redirect('/admin/dashboard/');

            $this->Auth->loginRedirect();
        }
        else
        {
            //$this->redirect(array('vivek'=>true,'controller' => 'users', 'action' => 'login','saurabh'));
            //$this->redirect(array('action' => 'login'));
            $this->redirect('/admin/login/');
        }

	}


	public function login(){
		
		$this->layout = "admin_login";
	 
	 	if ($this->request->is('post'))
	    {
		
			//pr($this->request->data);

	      # Log in using email
	      if( strstr($this->request->data['User']['username'],'@') )
	      {
	         
	        # Retrieve user username for auth
	        $useraux = $this->User->findByEmail($this->request->data['User']['username'],'username');

	        # Change the username from data form
	       	$this->request->data['User']['username'] = $useraux['User']['username'];
	      }

	      // echo "username ". $this->request->data['User']['username'];
	      // echo "\npassword ". $this->request->data['User']['password'];

	     // debug($this->Auth->login());
		  //debug(AuthComponent::password($this->data[$this->alias]['password']));
		 
 

	      # Try to log in the user
	      if ($this->Auth->login())
	      {
	      	
	        if( !empty($this->request->data['User']['remember_me']) && $this->request->data['User']['remember_me'] == 'S')
	        {
	          $cookie = array();
	          $cookie['username'] = $this->request->data['User']['username'];
	          $cookie['password'] = $this->Auth->password($this->request->data['User']['password']);

	          # Write cookie ( 30 Days )
	          $this->Cookie->write('Auth.User', $cookie, true);
	        }

	        # Redirect to home
	        //$this->redirect($this->Auth->redirect());
	        $this->redirect('/admin/dashboard/');
	      }
	      else
	      {
	      	echo "invalid username and password!";	
	        $this->Session->setFlash(__('Invalid username or password, try again'),'flash_fail');
	      }
	    }
 

	}


	public function logout()
  	{
    	# Destroy the Cookie
    	$this->Cookie->delete('Auth.User');

   	 	# Destroy the session and redirect to Auth logout url (which is defind in beforeFilter function)
   		$this->redirect($this->Auth->logout());
   	 

 	}


}