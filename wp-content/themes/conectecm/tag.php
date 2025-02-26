<?php get_header(); ?>

<!-- CONTENT WRAPPER
============================================= -->
<div id="content-wrapper" class="container wrapper" style="margin-top: 60px;">
    
    <!-- Blog Content
    ============================================= -->
    <div class="blog-content col-md-8">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <?php get_template_part('components/post_excerpt'); ?>

        <?php endwhile; ?>

         <div class="paginacao"><?php
         global $wp_query;

         $big = 999999999; // need an unlikely integer

         echo paginate_links( array(
            'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
            'format' => '?paged=%#%',
            'current' => max( 1, get_query_var('paged') ),
            'total' => $wp_query->max_num_pages,
            'prev_text' => __('Anterior'),
            'next_text' => __('Próximo'),
         ) );
         ?></div><!-- paginacao -->

        <?php else : ?>

            <p>Nenhum post publicado.</p>
        <?php endif; wp_reset_postdata(); ?>

    </div>
    <!-- blog content end -->

    <!-- SIDEBAR
    ============================================= -->
    <aside id="primary-sidebar" class=" col-md-4 clearfix">
       <?php get_template_part('components/sidebar'); ?>
    </aside>
    <!-- end of sidebar -->

</div>
<!-- #content-wrapper end -->

<?php get_footer(); ?>