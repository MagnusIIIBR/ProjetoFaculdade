<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>


<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta h ttp-equiv="X-UA-Compatible" content="IE=edge">

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

<div class="page-container"><!-- add class "sidebar-collapsed" to close sidebar by default, "chat-visible" to make chat appear always -->

    <div class="sidebar-menu">

        <div class="sidebar-menu-inner">

            <header class="logo-env">

                <!-- logo -->
                <div class="logo">
                    <a href="#">
                        <img src="<?php echo 'http://' . $_SERVER['HTTP_HOST'] ?>/assets/images/logo@2x.png" width="120" alt="" />
                    </a>
                </div>

                <!-- logo collapse icon -->
                <div class="sidebar-collapse">
                    <a href="#" class="sidebar-collapse-icon"><!-- add class "with-animation" if you want sidebar to have animation during expanding/collapsing transition -->
                        <i class="entypo-menu"></i>
                    </a>
                </div>


                <!-- open/close menu icon (do not remove if you want to enable menu on mobile devices) -->
                <div class="sidebar-mobile-menu visible-xs">
                    <a href="#" class="with-animation"><!-- add class "with-animation" to support animation -->
                        <i class="entypo-menu"></i>
                    </a>
                </div>

            </header>


            <ul id="main-menu" class="main-menu">
                <!-- add class "multiple-expanded" to allow multiple submenus to open -->
                <!-- class "auto-inherit-active-class" will automatically add "active" class for parent elements who are marked already with class "active" -->
                <li>
                    <a href="#" target="_blank">
                        <i class="entypo-gauge"></i>
                        <span class="title">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="entypo-flow-tree"></i>
                        <span class="title">Cliente</span>
                    </a>
                    <ul>
                        <li>
                            <a href="#">
                                <i class="entypo-flow-line"></i>
                                <span class="title">Menu Level 1.3</span>
                            </a>
                            <ul>
                                <li>
                                    <a href="#">
                                        <i class="entypo-flow-parallel"></i>
                                        <span class="title">Menu Level 2.1</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="entypo-flow-parallel"></i>
                                        <span class="title">Menu Level 2.2</span>
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <i class="entypo-flow-cascade"></i>
                                                <span class="title">Menu Level 3.1</span>
                                            </a>
                                            <ul>
                                                <li>
                                                    <a href="#">
                                                        <i class="entypo-flow-branch"></i>
                                                        <span class="title">Menu Level 4.1</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="entypo-flow-cascade"></i>
                                                <span class="title">Menu Level 3.2</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="entypo-flow-parallel"></i>
                                        <span class="title">Menu Level 2.3</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>

        </div>

    </div>

    <div class="main-content">

        <div class="row">

            <!-- Profile Info and Notifications -->
            <div class="col-md-6 col-sm-8 clearfix">

                <ul class="user-info pull-left pull-none-xsm">

                    <!-- Profile Info -->
                    <li class="profile-info dropdown"><!-- add class "pull-right" if you want to place this from right -->

                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="<?php echo 'http://' . $_SERVER['HTTP_HOST'] ?>/assets/images/thumb-1@2x.png" alt="" class="img-circle" width="44" />
NomeUsuário
                        </a>

                        <ul class="dropdown-menu">

                            <!-- Reverse Caret -->
                            <li class="caret"></li>

                            <!-- Profile sub-links -->
                            <li>
                                <a href="extra-timeline.html">
                                    <i class="entypo-user"></i>
                                    Edit Profile
                                </a>
                            </li>

                            <li>
                                <a href="mailbox.html">
                                    <i class="entypo-mail"></i>
                                    Inbox
                                </a>
                            </li>

                            <li>
                                <a href="extra-calendar.html">
                                    <i class="entypo-calendar"></i>
                                    Calendar
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    <i class="entypo-clipboard"></i>
                                    Tasks
                                </a>
                            </li>
                        </ul>
                    </li>

                </ul>

            </div>


            <!-- Raw Links -->
            <div class="col-md-6 col-sm-4 clearfix hidden-xs">

                <ul class="list-inline links-list pull-right">

                    <li>
                        <a href="#" data-toggle="chat" data-collapse-sidebar="1">
                            <i class="entypo-chat"></i>
                            Chat

                            <span class="badge badge-success chat-notifications-badge is-hidden">0</span>
                        </a>
                    </li>

                    <li class="sep"></li>

                    <li>
                        <a href="#">
                            Sair <i class="entypo-logout right"></i>
                        </a>
                    </li>
                </ul>

            </div>

        </div>

        <hr />

        <ol class="breadcrumb bc-3" >
            <li>
                <a href="#"><i class="fa-home"></i>Home</a>
            </li>
            <li>

                <a href="#">Controller</a>
            </li>
            <li class="active">

                <strong>Método</strong>
            </li>
        </ol>

        <h2>Clientes</h2>
        <br />


        <div class="row">
            <div class="col-md-12">

                <div class="panel panel-primary" data-collapsed="0">

                    <div class="panel-heading">
                        <div class="panel-title">
Formulário de dados básicos
                        </div>

                        <div class="panel-options">
                            <a href="#sample-modal" data-toggle="modal" data-target="#sample-modal-dialog-1" class="bg"><i class="entypo-cog"></i></a>
                            <a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
                        </div>
                    </div>

                    <div class="panel-body">

                        <form role="form" class="form-horizontal form-groups-bordered">
                            <div class="form-group">
                                <label for="field-1" class="col-sm-3 control-label">Nome completo</label>

                                <div class="col-sm-5">
                                    <input type="text" class="form-control" id="field-1" placeholder="Digite o nome completo">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="field-1" class="col-sm-3 control-label">E-mail</label>

                                <div class="col-sm-5">
                                    <input type="text" class="form-control" id="field-1" placeholder="Digite o e-mail">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="field-1" class="col-sm-3 control-label">CEP</label>

                                <div class="col-sm-5">
                                    <input type="text" class="form-control" id="field-1" data-mask="99999-999" placeholder="Digite o CEP">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="field-1" class="col-sm-3 control-label">Endereço</label>

                                <div class="col-sm-5">
                                    <input type="text" class="form-control" id="field-1" placeholder="Digite o endereço">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="field-1" class="col-sm-3 control-label">Bairro</label>

                                <div class="col-sm-5">
                                    <input type="text" class="form-control" id="field-1" placeholder="Digite o bairro">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="field-1" class="col-sm-3 control-label">Telefone</label>

                                <div class="col-sm-5">
                                    <input type="text" class="form-control" id="field-1" placeholder="Digite o telefone">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label">Estado</label>

                                <div class="col-sm-5">
                                    <select class="form-control">
                                        <option>AC</option>
                                        <option>DF</option>
                                        <option>MG</option>
                                        <option>MS</option>
                                        <option>RJ</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-offset-3 col-sm-5">
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>Pessoa física
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">Pessoa jurídica
                                        </label>
                                    </div>
                                </div>
                            </div>

                        </form>

                    </div>

                </div>

            </div>
        </div>

        <div class="row">
            <div class="col-md-12">

                <div class="panel panel-primary" data-collapsed="0">

                    <div class="panel-heading">
                        <div class="panel-title">
                            Formulário de dados específicos
                        </div>

                        <div class="panel-options">
                            <a href="#sample-modal" data-toggle="modal" data-target="#sample-modal-dialog-1" class="bg"><i class="entypo-cog"></i></a>
                            <a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
                        </div>
                    </div>

                    <div class="panel-body">

                        <form role="form" class="form-horizontal form-groups-bordered">
                            <div class="form-group">
                                <label for="field-1" class="col-sm-3 control-label">CPF</label>

                                <div class="col-sm-5">
                                    <input type="text" class="form-control" id="field-1" placeholder="Digite o CPF">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="field-1" class="col-sm-3 control-label">RG</label>

                                <div class="col-sm-5">
                                    <input type="text" class="form-control" id="field-1" placeholder="Digite o RG">
                                </div>
                            </div>

                        </form>

                    </div>

                </div>

            </div>

        </div>



        <!-- Footer -->
        <footer class="main">

            &copy; 2016 <strong>Projeto Sapataria</strong> by <a href="#" target="_blank">Grupo 3</a>

        </footer>
    </div>

</div>


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