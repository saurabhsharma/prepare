<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="ThemeBucket">
        <link rel="shortcut icon" href="images/favicon.html">
        <title><?php echo $TITLE_FOR_LAYOUT; ?></title>
        <!--Core CSS -->
        <link href="<?php echo $this->webroot; ?>assets/admin/bs3/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo $this->webroot; ?>assets/admin/css/bootstrap-reset.css" rel="stylesheet">
        <link href="<?php echo $this->webroot; ?>assets/admin/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
        <!-- Custom styles for this template -->
        <link href="<?php echo $this->webroot; ?>assets/admin/css/style.css" rel="stylesheet">
        <link href="<?php echo $this->webroot; ?>assets/admin/css/style-responsive.css" rel="stylesheet" />
        <!-- page specific css files -->
        <?php echo $this->Html->css($CSS_TO_INCLUDE) ?>
        <!-- Just for debugging purposes. Don't actually copy this line! -->
        <!--[if lt IE 9]><script src="<?php echo $this->webroot; ?>assets/admin/js/ie8/ie8-responsive-file-warning.js"></script><![endif]-->
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <section id="container" >
            <!--header start-->
            <header class="header fixed-top clearfix">
                <?php echo $this->element('header'); ?>
            </header>
            <!--header end-->
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
        <script src="<?php echo $this->webroot; ?>assets/admin/bs3/js/bootstrap.min.js"></script>
        <script class="include" type="text/javascript" src="<?php echo $this->webroot; ?>assets/admin/js/accordion-menu/jquery.dcjqaccordion.2.7.js"></script>
        <script src="<?php echo $this->webroot; ?>assets/admin/js/scrollTo/jquery.scrollTo.min.js"></script>
        <script src="<?php echo $this->webroot; ?>assets/admin/js/nicescroll/jquery.nicescroll.js" type="text/javascript"></script>
        <!--Right Side hidden bar graphs and charts javascript.. -->
        <!--Easy Pie Chart-->
        <script src="<?php echo $this->webroot; ?>assets/admin/assets/easypiechart/jquery.easypiechart.js"></script>
        <!--Sparkline Chart-->
        <script src="<?php echo $this->webroot; ?>assets/admin/assets/sparkline/jquery.sparkline.js"></script>
        <!--jQuery Flot Chart-->
        <script src="<?php echo $this->webroot; ?>assets/admin/assets/flot-chart/jquery.flot.js"></script>
        <script src="<?php echo $this->webroot; ?>assets/admin/assets/flot-chart/jquery.flot.tooltip.min.js"></script>
        <script src="<?php echo $this->webroot; ?>assets/admin/assets/flot-chart/jquery.flot.resize.js"></script>
        <script src="<?php echo $this->webroot; ?>assets/admin/assets/flot-chart/jquery.flot.pie.resize.js"></script>
        <!--....Right Side hidden bar graphs and charts javascript END here...  -->
        
        <!-- page specific javascript files -->
        <?php echo $this->Html->script($JS_TO_INCLUDE); ?>
        <!--common script init for all pages-->
        <script src="<?php echo $this->webroot; ?>assets/admin/js/scripts.js"></script>
        
    </body>
</html>