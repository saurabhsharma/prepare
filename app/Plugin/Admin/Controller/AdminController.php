<?php
class AdminController extends AdminAppController {

	public $helpers = array('Html', 'Form', 'Session');
    public $components = array('Session');


	public function beforeFilter(){
		parent::beforeFilter();
    	$this->Auth->allow(array('index','login'));

    }

	public function index() {
	 
		if($this->Session->read('Auth.User') && $this->Session->read('Auth.User.role_id') == '1')
        {
            //$this->redirect(array('admin'=>true,'controller' => 'users', 'action' => 'dashboard'));
             $this->redirect(array('action' => 'dashboard'));
        }
        else
        {
            //$this->redirect(array('vivek'=>true,'controller' => 'users', 'action' => 'login','saurabh'));
            $this->redirect(array('action' => 'login'));
        }
	  

	}


	public function login(){

		echo "<pre>";
		echo $_POST;
		echo "</pre>";
		 
		 

	}

	public function dashboard(){


		echo " in dashboard function";
		exit;

	}






}