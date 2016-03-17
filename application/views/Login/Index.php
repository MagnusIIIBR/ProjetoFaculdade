<?php
defined('BASEPATH') OR exit('No direct script access allowed');

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="description" content="Painel de Administração - Projeto SAPATARIA"/>
    <meta name="author" content=""/>

    <title>Projeto SAPATARIA | Login</title>

    <link rel="stylesheet"
          href="<?php echo 'http://' . $_SERVER['HTTP_HOST'] ?>/ProjetoFaculdade/assets/js/jquery-ui/css/no-theme/jquery-ui-1.10.3.custom.min.css">
    <link rel="stylesheet"
          href="<?php echo 'http://' . $_SERVER['HTTP_HOST'] ?>/ProjetoFaculdade/assets/css/font-icons/entypo/css/entypo.css">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic">
    <link rel="stylesheet"
          href="<?php echo 'http://' . $_SERVER['HTTP_HOST'] ?>/ProjetoFaculdade/assets/css/bootstrap.css">
    <link rel="stylesheet"
          href="<?php echo 'http://' . $_SERVER['HTTP_HOST'] ?>/ProjetoFaculdade/assets/css/neon-core.css">
    <link rel="stylesheet"
          href="<?php echo 'http://' . $_SERVER['HTTP_HOST'] ?>/ProjetoFaculdade/assets/css/neon-theme.css">
    <link rel="stylesheet"
          href="<?php echo 'http://' . $_SERVER['HTTP_HOST'] ?>/ProjetoFaculdade/assets/css/neon-forms.css">
    <link rel="stylesheet"
          href="<?php echo 'http://' . $_SERVER['HTTP_HOST'] ?>/ProjetoFaculdade/assets/css/custom.css">

    <script
        src="<?php echo 'http://' . $_SERVER['HTTP_HOST'] ?>/ProjetoFaculdade/assets/js/jquery-1.11.0.min.js"></script>
    <script>$.noConflict();</script>

    <!--[if lt IE 9]>
    <script
        src="<?php echo 'http://'. $_SERVER['HTTP_HOST'] ?>/ProjetoFaculdade/assets/js/ie8-responsive-file-warning.js"></script>
    <![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->


</head>
<body class="page-body login-page login-form-fall"
">

<!-- This is needed when you send requests via Ajax -->
<script type="text/javascript">
    var baseurl = '';
</script>

<div class="login-container">

    <div class="login-header login-caret">

        <div class="login-content">

            <a href="index.html" class="logo">
                <img src="<?php echo 'http://' . $_SERVER['HTTP_HOST'] ?>/ProjetoFaculdade/assets/images/logo@2x.png"
                     width="120" alt=""/>
            </a>

            <p class="description">Olá, faça o login para entrar no painel administrativo!</p>

            <!-- progress bar indicator -->
            <div class="login-progressbar-indicator">
                <h3>43%</h3>
                <span>logging in...</span>
            </div>
        </div>

    </div>

    <div class="login-progressbar">
        <div></div>
    </div>

    <div class="login-form">

        <div class="login-content">

            <div class="form-login-error">
                <h3>Login inválido</h3>
                <p>Enter <strong>demo</strong>/<strong>demo</strong> as login and password.</p>
            </div>

            <form method="post" role="form" id="form_login">

                <div class="form-group">

                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="entypo-user"></i>
                        </div>

                        <input type="text" class="form-control" name="usuario" id="username" placeholder="Usuário"
                               autocomplete="off"/>
                    </div>

                </div>

                <div class="form-group">

                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="entypo-key"></i>
                        </div>

                        <input type="password" class="form-control" name="senha" id="password" placeholder="Senha"
                               autocomplete="off"/>
                    </div>

                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block btn-login">
                        <i class="entypo-login"></i>
                        Entrar
                    </button>
                </div>

            </form>

            <div class="login-bottom-links">

                <a href="#" class="link">Esqueceu a senha?</a>

                <br/>

            </div>

        </div>

    </div>

</div>


<!-- Bottom scripts (common) -->
<script src="<?php echo 'http://' . $_SERVER['HTTP_HOST'] ?>/ProjetoFaculdade/assets/js/gsap/main-gsap.js"></script>
<script
    src="<?php echo 'http://' . $_SERVER['HTTP_HOST'] ?>/ProjetoFaculdade/assets/js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js"></script>
<script src="<?php echo 'http://' . $_SERVER['HTTP_HOST'] ?>/ProjetoFaculdade/assets/js/bootstrap.js"></script>
<script src="<?php echo 'http://' . $_SERVER['HTTP_HOST'] ?>/ProjetoFaculdade/assets/js/joinable.js"></script>
<script src="<?php echo 'http://' . $_SERVER['HTTP_HOST'] ?>/ProjetoFaculdade/assets/js/resizeable.js"></script>
<script src="<?php echo 'http://' . $_SERVER['HTTP_HOST'] ?>/ProjetoFaculdade/assets/js/neon-api.js"></script>
<script
    src="<?php echo 'http://' . $_SERVER['HTTP_HOST'] ?>/ProjetoFaculdade/assets/js/jquery.validate.min.js"></script>
<script src="<?php echo 'http://' . $_SERVER['HTTP_HOST'] ?>/ProjetoFaculdade/assets/js/neon-login.js"></script>


<!-- JavaScripts initializations and stuff -->
<script src="<?php echo 'http://' . $_SERVER['HTTP_HOST'] ?>/ProjetoFaculdade/assets/js/neon-custom.js"></script>


<!-- Demo Settings -->
<!--<script src="-->
<?php //echo 'http://'. $_SERVER['HTTP_HOST'] ?><!--/ProjetoFaculdade/assets/js/neon-demo.js"></script>-->

</body>
</html>
