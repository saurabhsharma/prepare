<?php

class ContactsController extends AdminAppController {
    public $uses = array('ContactManager.Contact');



    public function beforeFilter(){

    	$this->Auth->allow('*');

    }

    public function index() {
        //...
    	echo "hello";
        exit;

    }
}