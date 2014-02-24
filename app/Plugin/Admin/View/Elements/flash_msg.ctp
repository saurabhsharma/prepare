<div class="panel-body">

<?php 

echo "flash value - ".$this->Session->flash();


    if(($this->Session->check('flash_success'))) {

?>
    <div class="alert alert-success alert-block fade in">
        <button type="button" class="close close-sm" data-dismiss="alert">
        <i class="fa fa-times"></i>
        </button>
        <h4>
        <i class="icon-ok-sign"></i>
        Success!
        </h4>
        <p><?php echo $this->Session->flash('flash_success'); ?></p>
    </div>


<?php } ?>

    <div class="alert alert-block alert-danger fade in">
        <button type="button" class="close close-sm" data-dismiss="alert">
        <i class="fa fa-times"></i>
        </button>
        <strong>Oh snap!</strong> Change a few things up and try submitting again.
    </div>
    



    <div class="alert alert-success fade in">
        <button type="button" class="close close-sm" data-dismiss="alert">
        <i class="fa fa-times"></i>
        </button>
        <strong>Well done!</strong> You successfully read this important alert message.
    </div>
    



    <div class="alert alert-info fade in">
        <button type="button" class="close close-sm" data-dismiss="alert">
        <i class="fa fa-times"></i>
        </button>
        <strong>Heads up!</strong> This alert needs your attention, but it's not super important.
    </div>

    


    <div class="alert alert-warning fade in">
        <button type="button" class="close close-sm" data-dismiss="alert">
        <i class="fa fa-times"></i>
        </button>
        <strong>Warning!</strong> Best check yo self, you're not looking too good.
    </div>




</div>