<?php

class AdminAppController extends AppController {

	public function beforeFilter(){

		$this->layout = false;
	}
}