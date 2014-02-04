<?php echo $this->Form->create('User', array('url' => Configure::read('Site.url') . "admin/login/", 'class' => 'styled')); ?>

 
<label for="username">
    <span>Email:</span>		
    <?php echo $this->Form->input('username', array('class' => 'textbox', 'div' => false, 'label' => false)); ?>
</label>

<label for="password">
    <span>Password:</span>
    <?php
    echo $this->Form->input('password', array('class' => 'textbox', 'div' => false, 'label' => false));
    ?>
</label>
 
<?php

    $options = array('value' => 'login', 'type' => 'submit', 'div' => false, 'class' => 'button red small');
    echo $this->Form->end($options);

?>