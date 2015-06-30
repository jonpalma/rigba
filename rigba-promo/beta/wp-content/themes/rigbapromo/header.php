<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="author" content="Agencia Mixen www.mixen.mx">
<meta name="description" content="">
<meta name="keywords" content="">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title>RIGBA</title>

<!-- CSS Files -->
<link rel="stylesheet" href="<?php bloginfo('template_url')?>/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url');?>">

<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
<?php wp_head(); ?>
</head>
<body>
<nav class="navbar-fixed-top rigba-navbar"  <?php if(is_user_logged_in()) echo 'style="margin-top: 32px"'; ?>>
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapsiblenavigation" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"><img src="<?php bloginfo('template_url')?>/img/logo.png" alt="RIGBA"></a>
    </div>
    <div class="collapse navbar-collapse" id="collapsiblenavigation">
     <form class="navbar-form navbar-right" role="search">
        <div class="form-group">
          <input type="text" class="form-control">
        </div>
      </form>
        <?php wp_nav_menu(array('container' => 'false', 'theme_location' =>'header-menu', 'menu_class' => 'nav navbar-nav navbar-right main-nav')); ?>
      </ul>
    </div>
  </div>
</nav>