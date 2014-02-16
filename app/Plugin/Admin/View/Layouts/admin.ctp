<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="ThemeBucket">
    <link rel="shortcut icon" href="images/favicon.html">
    <title>BucketAdmin</title>
    <!--Core CSS -->
    <link href="<?php echo $this->webroot; ?>assets/admin/bs3/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo $this->webroot; ?>assets/admin/assets/jquery-ui/jquery-ui-1.10.1.custom.min.css" rel="stylesheet">
    <link href="<?php echo $this->webroot; ?>assets/admin/css/bootstrap-reset.css" rel="stylesheet">
    <link href="<?php echo $this->webroot; ?>assets/admin/assets/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="<?php echo $this->webroot; ?>assets/admin/assets/jvector-map/jquery-jvectormap-1.2.2.css" rel="stylesheet">
    <link href="<?php echo $this->webroot; ?>assets/admin/css/clndr.css" rel="stylesheet">
    <!--clock css-->
    <link href="<?php echo $this->webroot; ?>assets/admin/assets/css3clock/css/style.css" rel="stylesheet">
    <!--Morris Chart CSS -->
    <link rel="stylesheet" href="<?php echo $this->webroot; ?>assets/admin/assets/morris-chart/morris.css">
    <!-- Custom styles for this template -->
    <link href="<?php echo $this->webroot; ?>assets/admin/css/style.css" rel="stylesheet">
    <link href="<?php echo $this->webroot; ?>assets/admin/css/style-responsive.css" rel="stylesheet"/>
    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="<?php echo $this->webroot; ?>assets/admin/js/ie8/ie8-responsive-file-warning.js"></script><![endif]-->
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<section id="container">
    <!--header start-->
    <header class="header fixed-top clearfix">
        <?php echo $this->element('header'); ?>
    </header>
    <!--header end-->
    <!--sidebar start-->
    <aside>
        <div id="sidebar" class="nav-collapse">
            <!-- sidebar menu start-->
                <?php echo $this->element('left_sidebar'); ?>
            <!-- sidebar menu end-->
        </div>
    </aside>
    <!--sidebar end-->
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
          <?php echo $this->fetch('content'); ?>  
        </section>
    </section>
    <!--main content end-->
<!--right sidebar start-->
<div class="right-sidebar">
    <?php echo $this->element('right_sidebar'); ?>
</div>
<!--right sidebar end-->
</section>
<!-- Placed js at the end of the document so the pages load faster -->
<!--Core js-->
<script src="<?php echo $this->webroot; ?>assets/admin/js/lib/jquery.js"></script>
<script src="<?php echo $this->webroot; ?>assets/admin/assets/jquery-ui/jquery-ui-1.10.1.custom.min.js"></script>
<script src="<?php echo $this->webroot; ?>assets/admin/bs3/js/bootstrap.min.js"></script>
<script src="<?php echo $this->webroot; ?>assets/admin/js/accordion-menu/jquery.dcjqaccordion.2.7.js"></script>
<script src="<?php echo $this->webroot; ?>assets/admin/js/scrollTo/jquery.scrollTo.min.js"></script>
<script src="<?php echo $this->webroot; ?>assets/admin/js/nicescroll/jquery.nicescroll.js" type="text/javascript"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="<?php echo $this->webroot; ?>assets/admin/js/flot-chart/excanvas.min.js"></script><![endif]-->
<script src="<?php echo $this->webroot; ?>assets/admin/assets/jQuery-slimScroll-1.3.0/jquery.slimscroll.js"></script>
<script src="<?php echo $this->webroot; ?>assets/admin/assets/skycons/skycons.js"></script>
<script src="<?php echo $this->webroot; ?>assets/admin/assets/jquery.scrollTo/jquery.scrollTo.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
<script src="<?php echo $this->webroot; ?>assets/admin/assets/calendar/clndr.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.5.2/underscore-min.js"></script>
<script src="<?php echo $this->webroot; ?>assets/admin/assets/calendar/moment-2.2.1.js"></script>
<script src="<?php echo $this->webroot; ?>assets/admin/js/calendar/evnt.calendar.init.js"></script>
<script src="<?php echo $this->webroot; ?>assets/admin/assets/jvector-map/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?php echo $this->webroot; ?>assets/admin/assets/jvector-map/jquery-jvectormap-us-lcc-en.js"></script>
<script src="<?php echo $this->webroot; ?>assets/admin/assets/gauge/gauge.js"></script>
<!--clock init-->
<script src="<?php echo $this->webroot; ?>assets/admin/assets/css3clock/js/script.js"></script>
<!--Easy Pie Chart-->
<script src="<?php echo $this->webroot; ?>assets/admin/assets/easypiechart/jquery.easypiechart.js"></script>
<!--Sparkline Chart-->
<script src="<?php echo $this->webroot; ?>assets/admin/assets/sparkline/jquery.sparkline.js"></script>
<!--Morris Chart-->
<script src="<?php echo $this->webroot; ?>assets/admin/assets/morris-chart/morris.js"></script>
<script src="<?php echo $this->webroot; ?>assets/admin/assets/morris-chart/raphael-min.js"></script>
<!--jQuery Flot Chart-->
<script src="<?php echo $this->webroot; ?>assets/admin/assets/flot-chart/jquery.flot.js"></script>
<script src="<?php echo $this->webroot; ?>assets/admin/assets/flot-chart/jquery.flot.tooltip.min.js"></script>
<script src="<?php echo $this->webroot; ?>assets/admin/assets/flot-chart/jquery.flot.resize.js"></script>
<script src="<?php echo $this->webroot; ?>assets/admin/assets/flot-chart/jquery.flot.pie.resize.js"></script>
<script src="<?php echo $this->webroot; ?>assets/admin/assets/flot-chart/jquery.flot.animator.min.js"></script>
<script src="<?php echo $this->webroot; ?>assets/admin/assets/flot-chart/jquery.flot.growraf.js"></script>
<script src="<?php echo $this->webroot; ?>assets/admin/js/dashboard.js"></script>
<script src="<?php echo $this->webroot; ?>assets/admin/js/custom-select/jquery.customSelect.min.js" ></script>
<!--common script init for all pages-->
<script src="<?php echo $this->webroot; ?>assets/admin/js/scripts.js"></script>

<!--script for this page-->
</body>
</html>