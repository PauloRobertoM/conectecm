<?php get_header() ?>

<!-- CONTENT WRAPPER
============================================= -->
<div id="content-wrapper">

   <!-- Portfolio Single
   ============================================= -->
   <section class="portfolio-single">

      <?php /*
      <div class="container">
         <h2 class="thetitle wow fadeIn">
            Case Studio Gallery of Our Works
            </h2>
         <p class="subtitle wow fadeIn">
            We think our work speaks for itself. We craft bespoke websites, digital tools, info-graphics and logos to bring your message to colorful design
         </p>
      </div>
      */ ?>

      <?php /*
      <div id="component" class="component component-fullwidth fxSlideBehind">
         <ul class="itemwrap">
            <li class="current"><img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/home-slide.jpg" alt="img06"/></li>
            <li><img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/home-slide2.jpg" alt="img07"/></li>
            <li><img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/home-slide3.jpg" alt="img08"/></li>
         </ul>
         <nav>
            <a class="prev" href="#"></a>
            <a class="next" href="#"></a>
         </nav>
      </div>
      */ ?>

      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <div class="single-portfolio-content clearfix">
         <div class="desc-single-portfolio-content col-md-6" style="padding-top: 0;">
            <h3 class="title" style="margin: 0;"><?php the_title(); ?></h3>
            <div class="meta-post-top">
                <span class="author"><i class="smaze icon-calendar"></i><?php the_date(); ?> </span>
                <!-- <span class="comments"><i class="smaze icon-eye"></i>0</span> -->
            </div>
            <div class="thecontent-single-portfolio-desc">
              <?php the_content(); ?>
              <?php /*
              <p>Smaze is the one of the leading creative digital agency in Melobourne, We think our work speaks for itself. We craft be spoke websites, digital tools, info-graphics and logos to bring your message to colorful design We think our work speaks for itself. We craft bespoke websites, digital tools, info-graphics and logos to bring websites, digital tools, info-graphics</p>
              <p>We think our work speaks for itself. We craft be spoke websites, digital tools, info-graphics and logos to bring your message to colorful design We think our work speaks for itself. </p>
              */ ?>
           </div>

            <?php if (get_field('link')) : ?>
            <div>
               <a href="<?php echo get_field('link'); ?>" class="link_web" target="_blank">Visitar site</a>
            </div>
            <?php endif; ?>

            <hr>

            <div id="share_icones">

               <a href="http://www.facebook.com/share.php?u=<?php the_permalink(); ?>&title=<?php the_title(); ?>" target="_blank">
                  <span class="icon icon-facebook"></span>
               </a>

               <a href="http://twitter.com/home?status=<?php the_title(); ?>+<?php the_permalink(); ?>" target="_blank">
                  <span class="icon icon-twitter"></span>
               </a>

               <a href="http://www.pinterest.com/pin/create/button/?url=<?php the_permalink(); ?>&description=<?php the_title(); ?>" target="_blank">
                  <span class="icon icon-pinterest"></span>
               </a>

            </div><!-- share_icones -->
         </div>

        <div class="img-single-portfolio-content col-md-6">
          <?php the_post_thumbnail(); ?>
        </div>
      </div>
      <?php endwhile; endif; ?>

   </section>
   <!-- portfolio single end -->

<?php get_footer() ?>
