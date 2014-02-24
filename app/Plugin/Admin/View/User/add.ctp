
<?php echo $this->Session->flash(); ?>

<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                <?php echo __('Add User') ?>
            </header>
            <div class="panel-body">
                <div class="position-center">
                    
                    <?php
                    echo $this->Form->create
                    (
                    'User',
                    array
                    (
                    'class'     => 'form-horizontal',
                    'inputDefaults' => array
                    (
                    'error' => false
                    )
                    )
                    );
                    ?>
                    <div class="form-group">
                        <label class="col-lg-2 col-sm-2 control-label">Email</label>
                        <div class="col-lg-10">
                            <?php
                            echo $this->Form->input('email',
                            array(
                            'type' => 'email',
                            'class' => 'form-control',
                            'placeholder' => __('Email'),
                            'div' => false, 
                            'label' => false,
                            'value' => !empty( $user['User']['email'] ) ? $user['User']['email'] : ''
                            )
                            );
                            ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-2 col-sm-2 control-label" for="inputUsername">Username</label>
                        <div class="col-lg-10">
                            <?php
                            echo $this->Form->input('username',
                            array(
                            'div' => false, 
                            'label' => false,
                            'placeholder' => __('Username'),
                            'class' => 'form-control',
                            'value' => !empty( $user['User']['username'] ) ? $user['User']['username'] : ''
                            )
                            );
                            ?>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-lg-2 col-sm-2 control-label" for="inputPassword1">Password</label>
                        <div class="col-lg-10">
                            <?php
                            echo $this->Form->input('password',
                            array(
                            'type' => 'password',
                            'div' => false, 
                            'label' => false,
                            'class' => 'form-control',
                            'placeholder' => __('Password'),
                            'value' => false
                            )
                            );
                            ?>
                            
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-2 col-sm-2 control-label" for="inputPassword1">Re Type Password</label>
                        <div class="col-lg-10">
                            <?php
                            echo $this->Form->input('role', array(
                            'div' => false, 
                            'label' => false,
                            'options' => array('admin' => __('Admin'), 'author' => __('Author')),
                            'class' => 'form-control',
                            'selected' => !empty( $user['User']['role'] ) ? $user['User']['role'] : ''
                            ));
                            ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-offset-2 col-lg-10">
                            <button class="btn btn-info" type="submit"> <?php echo __('Submit') ?></button>
                            <button class="btn btn-danger" type="cancel"> <?php echo __('Cancel') ?></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>
</div>