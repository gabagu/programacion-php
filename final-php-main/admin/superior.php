<?php
session_start();
date_default_timezone_set('America/Lima');

//var_dump($_SESSION);

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Bootflat-Admin Template</title>
    <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="shortcut icon" href="favicon_16.ico"/>
    <link rel="bookmark" href="favicon_16.ico"/>
    <!-- site css -->
    <link rel="stylesheet" href="css/site.min.css">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,800,700,400italic,600italic,700italic,800italic,300italic" rel="stylesheet" type="text/css">
    <!-- <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'> -->
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
    <script type="text/javascript" src="js/site.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
  </head>
  <body>
    <!--nav-->
 <nav role="navigation" class="navbar navbar-custom">
 <div class="container-fluid">
   <!-- Brand and toggle get grouped for better mobile display -->
   <div class="navbar-header">
     <a href="#" class="navbar-brand color-blanco">GABAGU ADMIN</a>
   </div>

   <!-- Collect the nav links, forms, and other content for toggling -->
   <div id="bs-content-row-navbar-collapse-5" class="collapse navbar-collapse">
     <ul class="nav navbar-nav navbar-right">
       <!-- <li class="disabled"><a href="#">Link</a></li> -->
       <li class="dropdown">
         <a data-toggle="dropdown" class="dropdown-toggle" href="#" style="color:#FFFFFF;"><?php echo $_SESSION['username']; ?><b class="caret"></b></a>
         <ul role="menu" class="dropdown-menu">
           <li class="dropdown-header"><i class="glyphicon glyphicon-cog"></i> Configuraciòn</li>
           <li class="active"><a href="#" style="color:#FFFFFF;"><i class="glyphicon glyphicon-wrench"></i> Preferencias</a></li>
           <li></li>
           <li><a href="#"><i class="glyphicon glyphicon-user"></i> Perfil</a></li>
           <li class="divider"></li>
           <li><a href="logout.php"><i class="glyphicon glyphicon-off"></i> Cerrar Sesión</a></li>
         </ul>
       </li>
     </ul>

   </div><!-- /.navbar-collapse -->
 </div><!-- /.container-fluid -->
</nav>
<!--header-->
<div class="container-fluid">
<!--documents-->
 <div class="row row-offcanvas row-offcanvas-left">


