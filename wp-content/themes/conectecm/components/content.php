<button id="top" class="esconder"><span class="ion-android-arrow-up"></span></button>

<header id="header" class="<?php echo (is_home()) ? 'home' : ''; ?>">
   <div class="container">

      <div class="col-md-4">
         <div class="header_logo">
            <a href="<?php echo site_url() ?>">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/conecte/logo.png" alt="<?php bloginfo('title') ?>" class="logo_normal">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/conecte/logo_fixo.png" alt="<?php bloginfo('title') ?>" class="logo_fixo">
            </a>
         </div><!--header_logo-->
      </div><!--col-md-4-->

      <div class="col-md-8">
         <nav class="header_menu" id="menu">
            <ul>
               <li><a href="<?php echo site_url() ?>">Conecte</a></li>
               <li><a href="<?php echo site_url('#servicos'); ?>" class="<?php echo (is_home()) ? 'link' : ''; ?>">Serviços</a></li>
               <li><a href="<?php echo site_url('#cases'); ?>" class="<?php echo (is_home()) ? 'link' : ''; ?>">Portfólio</a></li>
               <li><a href="<?php echo site_url('#blog'); ?>" class="<?php echo (is_home()) ? 'link' : ''; ?>">Blog</a></li>
               <li><a href="<?php echo site_url('#contato'); ?>" class="<?php echo (is_home()) ? 'link' : ''; ?>">Contato</a></li>
            </ul>
         </nav><!--header_menu-->
      </div><!--col-md-8-->

      <span class="ion-navicon-round" id="botao_m"></span>

   </div><!--container-->
</header><!--header-->

<?php if (is_home()) : ?>

  <?php get_template_part('components/vitrine'); ?>

<?php endif; ?>

<!-- CONTENT WRAPPER
============================================= -->
<div id="content-wrapper">