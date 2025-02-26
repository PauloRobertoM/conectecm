<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<?php $terms = get_the_terms($post->ID, 'categorias_trabalhos'); ?>

<article class="portfolio-item <?php foreach ($terms as $term) : echo $term->slug; endforeach; ?>">
<div class="wow fadeIn">
<a href="<?php the_permalink() ?>">
   <div class="portfolio-image">
       <?php the_post_thumbnail('trabalhos_crop'); ?>
       <div class="portfolio-overlay">
           <div class="portfolio-desc">
               <h3 class="title-with-bord"><?php the_title() ?></h3>
               <span><?php foreach ($terms as $term) : echo $term->name; endforeach; ?></span>
           </div>
       </div>
   </div>
</a>
</div>
</article>

<?php endwhile; endif; ?>
