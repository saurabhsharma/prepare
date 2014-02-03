<?php
 
	 
	//Router::connect('/home', array('controller' => 'pages', 'action' => 'index'));

 

	Router::connect('/admin/login', array('plugin'=>'Admin','controller' => 'admin', 'action' => 'login'));


 


 