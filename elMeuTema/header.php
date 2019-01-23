<!DOCTYPE html>
<html lang="es">
<head>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<meta name="description" content='Plantilla WPCustom'/>

    <title><?php bloginfo('name')?></title>

    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>"  />
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/lib/bootstrap/bootstrap.min.css"  />
    <link rel="shortcut icon" type="image/x-icon" href="<?php bloginfo('template_directory'); ?>/imgs/favicon.ico"  />
    <link rel="pingback" href="<?php bloginfo(pingback_url); ?>">; 
    <?php wp_head(); ?>
</head>

<body>

  
<header>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        
   <a class="navbar-brand" href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">

            <li class="nav-item active">
              <a class="nav-link" href="index.php">Portada
                <!--span class="sr-only">(current)</span-->
              </a>
            </li>

            <?php
              if(isset($_SESSION['username'])){
            ?>
              <li class="nav-item">
                <a class="nav-link" href="redacta.php">Redacta</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="images.php">Gestor de mitjos</a>
              </li>


            <?php
              }
              if (isset($_SESSION['role']) && $_SESSION['role']=="admin") {
            ?>
            <li class="nav-item">
              <a class="nav-link" href="administra.php">Administra</a>
            </li>
            <?php } ?>

          </ul>
        </div>
      </div>
       <div id="userInfo">
       <?php echo ($userLabel);

       if($user!="Anònim") { ?>
       <a href="logout.php"> Tanca la sessió</a>
       <?php } else { ?>
       <a href="loginForm.php"> Inicia la sessió</a>
       <?php }?>


       </div>
            
    </nav>

</header>	






