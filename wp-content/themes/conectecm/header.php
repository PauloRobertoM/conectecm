<!DOCTYPE html>
<html dir="ltr" lang="pt-br">

<head>
   <?php wp_head(); ?>

    <meta name="google-site-verification" content="XomLpxTKzhMIDnzivy8Ql-mnRQlKfeLZWho_1DOqPeE" />

   <meta http-equiv="content-type" content="text/html; charset=utf-8" />

   <meta name="description" content="Comunicação e Marketing, Tecnologia, Comunicação, Mobile, Político e Sistemas Web">
   <meta name="author" content="CONECTE">
   
   <!-- meta tags -->  
   <meta property="og:title" content="CONECTE | Comunicação e Marketing." />         
   <meta property="og:type" content="website" />                
   <meta property="og:url" content="http://www.conectecm.com.br/" />        
   <meta property="og:site_name" content="CONECTE | Comunicação e Marketing" />         
   <meta property="og:description" content="Comunicação e Marketing, Tecnologia, Comunicação, Mobile, Político e Sistemas Web" />         
     
   <meta name="keywords" content="conecte, comunicação e marketing, agência web, marketing digital, web, digital, agência, marketing, programação, design, redes sociais, mídias sociais, e-commerce" />  

   <!-- Stylesheets
   ============================================= -->
   <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/all.css" type="text/css" />
   <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/icomoon/style.css">
   <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/build/style.css" type="text/css" />

   <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/owl.carousel.css">
   <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/owl.theme.css">
   <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/animate.min.css">

   <!-- External Stylesheets
   ============================================= -->
   <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/rs-plugin/css/settings.css" media="screen" />

   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

   <!-- External JavaScripts
   ============================================= -->
   <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.js"></script>

   <!-- Document Title
   ============================================= -->
   <title><?php wp_title( '|', true, 'right' ); ?> <?php bloginfo('title'); ?>  -  <?php bloginfo('description'); ?></title>

   <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" />
</head>

<body>
   <div class="preloader">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/conecte/preloader.gif">
   </div><!-- preloader -->


   <!-- MAIN WRAPPER -->
   <div id="main-wrapper" class="animsition clearfix">

      <?php get_template_part('components/content'); ?>
