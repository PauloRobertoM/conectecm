<?php if ( have_posts() ) : ?>
<!-- Blog Section
============================================= -->
<section class="blog-home clearfix" id="blog">

    <div class="container">
        <h3 class="title-with-bord wow fadeIn">BLOG</h3>
        <p class="subtitle wow fadeIn">Conecte-se com as últimas novidades!</p>

        <!-- Blog Items
        ============================================= -->
        <div id="blog-block">

            <?php $count = 1; while ( have_posts() ) : the_post(); ?>

               <article class="blog-item <?php echo ($count > 3) ? 'only_desktop' : ''; ?> <?php echo ($count < 2) ? 'wide-blog' : ''; ?> <?php echo (has_post_thumbnail()) ? 'has-post-thumbnail' : ''; ?>">
                  <div class="blog-wrap wow fadeInUp">
                  <?php if (has_post_thumbnail()) : ?>
                    <?php ($count < 2) ? the_post_thumbnail('blog_crop_um') : the_post_thumbnail('blog_crop_dois'); ?>
                  <?php endif; ?>

                     <div class="blog-overlay">
                        <div class="blog-desc">
                           <div class="blog-date"><?php echo get_the_date('d'); ?> <?php echo strtoupper(get_the_date('M')); ?>,<?php echo get_the_date('Y'); ?></div>
                           <h3 class="blog-title"><?php the_title(); ?></h3>
                           <p class="blog-excerpt"><?php the_excerpt(); ?></p>
                           <a href="<?php echo the_permalink(); ?>" class="read-more btn">Continue lendo</a>
                        </div>
                     </div>
                  </div>
               </article>

            <?php $count++; endwhile; ?>

         </div>
        <!-- blog-block end -->
    </div>
    <!-- container end -->

    <!-- Blog Script
    ============================================= -->
    <script type="text/javascript">
        jQuery(window).load(function(){
            var $containerBlog = $('#blog-block');
            $containerBlog.isotope({
                transitionDuration: '0.65s',
                    layoutMode: 'packery',
            });
            $(window).resize(function() {
                $containerBlog.isotope('layout');
            });

        });
    </script><!-- Blog Script End -->
</section>
<!-- blog section end -->
<?php endif; ?>