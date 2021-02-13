<!DOCTYPE html>
<html lang: "es">
<head>
    <meta charset="utf-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Pagina web que contiene recetas de cocina nacional e internacional">
    <meta name="keywords" content="cocina, gatronomia, recetas, cocina española">
    <link rel="icon" href="<?php echo get_stylesheet_directory_uri(); ?>/images/logo_misrecetas.png">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/style.css">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <?php wp_head()?>; 
</head>
<body>
   <div class="container">

    <header id="header" class="block-center-row">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo_misrecetas.png" alt="logo"> 
    </header>

    <?php
    wp_nav_menu(
        array(
            "theme_location" => "menu-1",
            "menu_id" => "primary-menu",
            "container" => "nav",
            "container_class" => "nav-main block-center-row fnt-lg mb-2"

        )
    );
    ?>

    <nav class="nav-main fnt-lg block-center-row mb-2">
       <ul>
           <li>Inicio</li>
           <li class="separator">|</li>
           <li><a href="Recetas.html"> Recetas</a></li>
           <li class="separator">|</li>
           <li><a href="contactar.html"> Contactar</a></li>
       </ul> 
        
   </nav>