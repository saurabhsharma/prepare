<?php
class DashboardController extends AdminAppController {

	public $helpers = array('Html', 'Form', 'Session');
    public $components = array('Session');


	public function beforeFilter(){
		parent::beforeFilter();
    	

    }

	public function index() {
	 
		//echo "Here will be all the magic for dashboard!!";
		 

	}
 

}