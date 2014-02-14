<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="ThemeBucket">
    <link rel="shortcut icon" href="images/favicon.html">

    <title><?php echo $title_for_layout; ?> - <?php echo Configure::read('Site.title'); ?></title>

    <!--Core CSS -->
    <?php echo $this->Html->css("Admin.bs3.css.bootstrap.min"); ?>
    <link href="<?php echo $this->webroot; ?>assets/admin/bs3/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo $this->webroot; ?>assets/admin/css/bootstrap-reset.css" rel="stylesheet">
    <link href="<?php echo $this->webroot; ?>assets/admin/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="<?php echo $this->webroot; ?>assets/admin/css/style.css" rel="stylesheet">
    <link href="<?php echo $this->webroot; ?>assets/admin/css/style-responsive.css" rel="stylesheet" />

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="js/ie8/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>

  <body class="login-body">

    <div class="container">
      <?php echo $this->fetch('content'); ?>  
    </div>



    <!-- Placed js at the end of the document so the pages load faster -->

    <!--Core js-->
    <script src="<?php echo $this->webroot; ?>assets/admin/js/lib/jquery.js"></script>
    <script src="<?php echo $this->webroot; ?>assets/admin/bs3/js/bootstrap.min.js"></script>

  </body>
</html>
