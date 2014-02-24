<?php
class DashboardController extends AdminAppController {

	public $helpers = array('Html', 'Form', 'Session');
    public $components = array('Session');


	public function beforeFilter(){
		parent::beforeFilter();
    	

    }

	public function index() {
	 
		//echo "Here will be all the magic for dashboard!!";
		 


		// including css and js for this view.. :)

		$this->set('CSS_TO_INCLUDE',array('/assets/admin/assets/jquery-ui/jquery-ui-1.10.1.custom.min.css',
			'/assets/admin/assets/jvector-map/jquery-jvectormap-1.2.2.css',
			'/assets/admin/css/clndr.css',
			'/assets/admin/assets/css3clock/css/style.css',
			'/assets/admin/assets/morris-chart/morris.css')); 
 



		$this->set('JS_TO_INCLUDE',array('/assets/admin/assets/jquery-ui/jquery-ui-1.10.1.custom.min.js',
			'/assets/admin/assets/jQuery-slimScroll-1.3.0/jquery.slimscroll.js',
			'/assets/admin/assets/skycons/skycons.js',
			'/assets/admin/assets/jquery.scrollTo/jquery.scrollTo.js',
			'http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js',
			'/assets/admin/assets/calendar/clndr.js',
			'http://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.5.2/underscore-min.js',
			'/assets/admin/assets/calendar/moment-2.2.1.js',
			'/assets/admin/js/calendar/evnt.calendar.init.js',
			'/assets/admin/assets/jvector-map/jquery-jvectormap-1.2.2.min.js',
			'/assets/admin/assets/jvector-map/jquery-jvectormap-us-lcc-en.js',
			'/assets/admin/assets/gauge/gauge.js',
			'/assets/admin/assets/css3clock/js/script.js',
			'/assets/admin/assets/morris-chart/morris.js',
			'/assets/admin/assets/morris-chart/raphael-min.js',
			'/assets/admin/assets/flot-chart/jquery.flot.animator.min.js',
			'/assets/admin/assets/flot-chart/jquery.flot.growraf.js',
			'/assets/admin/js/dashboard.js',
			'/assets/admin/js/custom-select/jquery.customSelect.min.js'));
	}
 

}