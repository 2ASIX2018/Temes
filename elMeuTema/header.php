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
        

       </div>
            
    </nav>

</header>	






