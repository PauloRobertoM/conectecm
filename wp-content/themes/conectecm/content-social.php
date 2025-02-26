<?php
$args = array (
   'post_type'              => 'mensagens',
   'post_status'            => 'publish',
   'posts_per_page'         => '100',
);

$mensagens = new WP_Query( $args );
?>

<?php if ( $mensagens->have_posts() ) : ?>
<!-- Mensagens Sociais Section
============================================= -->
<section id="mensagens_sociais" class="clearfix wow fadeIn">

   <div class="container">

      <div id="sociais" class="owl-carousel">

         <?php while ( $mensagens->have_posts() ) : $mensagens->the_post(); ?>
         <!-------------------- SOCIAL -------------------->
         <article>
            <a href="<?php echo get_post_meta($post->ID, 'link_postagem', true); ?>" target="_blank">
               <?php
               $social = 'icon ';

               switch (get_post_meta($post->ID, 'redes_sociais', true)) {
                  case 'facebook':
                     $social .= 'icon-facebook';
                     break;

                  case 'instagram':
                     $social .= 'icon-instagram';
                     break;

                  case 'pinterest':
                     $social .= 'icon-pinterest';
                     break;

                  case 'twitter':
                     $social .= 'icon-twitter';
                     break;
               }
               ?>
               <span class="<?php echo $social; ?>"></span>

               <p><?php the_excerpt(); ?></p>
               <h1><?php the_title(); ?></h1>
            </a>
         </article>
         <?php endwhile; ?>

   </div>
   <!-- container end -->

</section>
<!-- mensagens sociais section end -->
<?php endif; wp_reset_postdata(); ?>
