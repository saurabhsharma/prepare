<?php

class AdminAppController extends AppController {

	public function beforeFilter(){

		$this->layout = "admin";
		$this->set('TITLE_FOR_LAYOUT', __('Admin', true));


		$this->set('CSS_TO_INCLUDE',array()); 
		$this->set('JS_TO_INCLUDE',array());
		
	}
}