<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Painel de Administração - Projeto SAPATARIA" />
    <meta name="author" content="" />

    <title>Projeto SAPATARIA | Sistema</title>

    <link rel="stylesheet" href="<?php echo 'http://' . $_SERVER['HTTP_HOST'] ?>/assets/js/jquery-ui/css/no-theme/jquery-ui-1.10.3.custom.min.css">
    <link rel="stylesheet" href="<?php echo 'http://' . $_SERVER['HTTP_HOST'] ?>/assets/css/font-icons/entypo/css/entypo.css">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic">
    <link rel="stylesheet" href="<?php echo 'http://' . $_SERVER['HTTP_HOST'] ?>/assets/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo 'http://' . $_SERVER['HTTP_HOST'] ?>/assets/css/neon-core.css">
    <link rel="stylesheet" href="<?php echo 'http://' . $_SERVER['HTTP_HOST'] ?>/assets/css/neon-theme.css">
    <link rel="stylesheet" href="<?php echo 'http://' . $_SERVER['HTTP_HOST'] ?>/assets/css/neon-forms.css">
    <link rel="stylesheet" href="<?php echo 'http://' . $_SERVER['HTTP_HOST'] ?>/assets/css/custom.css">

    <script src="<?php echo 'http://' . $_SERVER['HTTP_HOST'] ?>/assets/js/jquery-1.11.0.min.js"></script>
    <script>$.noConflict();</script>

    <!--[if lt IE 9]><script src="<?php echo 'http://' . $_SERVER['HTTP_HOST'] ?>/assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->


</head>

  <body class="page-body">
  <?php $this->load->view('header'); ?>

  <div class="main-content">

      <?php $this->load->view($view); ?>

  </div>

  <?php $this->load->view('footer'); ?>

  	<div class="container theme-showcase" role="main">

        <?php if(!empty($message['message'])): ?>

            <div class="alert alert-<?=$message['class']?>"><?=$message['message']?></div>

        <?php endif; ?>

  	</div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
  <!-- Bottom scripts (common) -->
  <script src="<?php echo 'http://' . $_SERVER['HTTP_HOST'] ?>/assets/js/gsap/main-gsap.js"></script>
  <script src="<?php echo 'http://' . $_SERVER['HTTP_HOST'] ?>/assets/js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js"></script>
  <script src="<?php echo 'http://' . $_SERVER['HTTP_HOST'] ?>/assets/js/bootstrap.js"></script>
  <script src="<?php echo 'http://' . $_SERVER['HTTP_HOST'] ?>/assets/js/joinable.js"></script>
  <script src="<?php echo 'http://' . $_SERVER['HTTP_HOST'] ?>/assets/js/resizeable.js"></script>
  <script src="<?php echo 'http://' . $_SERVER['HTTP_HOST'] ?>/assets/js/neon-api.js"></script>


  <!-- JavaScripts initializations and stuff -->
  <script src="<?php echo 'http://' . $_SERVER['HTTP_HOST'] ?>/assets/js/neon-custom.js"></script>


  <!-- Demo Settings -->
  <script src="<?php echo 'http://' . $_SERVER['HTTP_HOST'] ?>/assets/js/neon-demo.js"></script>
</body>
</html>