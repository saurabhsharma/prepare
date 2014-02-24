<?php
class UserController extends AdminAppController {

	public $helpers = array('Html', 'Form', 'Session');
    public $components = array('Session');


	public function beforeFilter(){
		parent::beforeFilter();
    	

    }

	public function index() {
	  
	  	$this->set('TITLE_FOR_LAYOUT', __('Users', true));

		
		if(AuthComponent::user('role') != 'admin')
		{
		  throw new ForbiddenException("Você não tem permissão para executar esta ação.");
		}
		$this->User->recursive = 0;
		$this->set('users', $this->paginate());



		$this->set('CSS_TO_INCLUDE',array('/assets/advanced-datatable/media/css/demo_page.css',
			'/assets/advanced-datatable/media/css/demo_table.css',
			'/assets/data-tables/DT_bootstrap.css')); 


		$this->set('JS_TO_INCLUDE',array('/assets/advanced-datatable/media/js/jquery.dataTables.js',
			'/assets/data-tables/DT_bootstrap.js'));

	}



	  public function add()
	  {


 		$this->Session->setFlash(__('The user has been saved'),'flash_success');

	    if ($this->request->is('post'))
	    {

	      $this->User->create();

	      if ($this->User->save($this->request->data))
	      {
	        $this->Session->setFlash(__('The user has been saved'),'flash_success');
	        $this->redirect('/admin/user/add');
	      }
	      else
	      {
	        # Create a loop with validation errors
	        $this->Error->set( $this->User->invalidFields() );
	      }
	    }
	    $this->set('label', 'Register user');
	    //$this->render('_form');


		$this->set('CSS_TO_INCLUDE',array()); 

		$this->set('JS_TO_INCLUDE',array());


	  }


}
 

