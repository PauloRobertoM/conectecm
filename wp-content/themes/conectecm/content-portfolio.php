<?php
$args = array (
    'post_type'      => 'trabalhos',
    'post_status'    => 'publish',
    'posts_per_page' => '8',
);


$trabalhos = new WP_Query( $args );


if ( $trabalhos->have_posts() ) : ?>

<!-- Portfolio Section
============================================= -->
<div id="cases"></div>
<section class="portfolio">

    <div class="container">
        <h3 class="title-with-bord wow fadeIn">PORTFÓLIO</h3>
        <p class="subtitle wow fadeIn">Para cada projeto um novo jeito de conectar pessoas e ideias.<br> Confira um pouco do que produzimos diariamente.</p>
    </div>

    <!-- Portfolio Filter
    ============================================= -->
    <ul id="portfolio-filter" class="wow fadeIn clearfix">

        <li class="activeFilter"><a href="#" data-filter="*">Todos</a></li>

        <?php
        $args = array(
            'orderby'           => 'name',
            'order'             => 'ASC',
            'hide_empty'        => true,
            'exclude'           => array(),
            'exclude_tree'      => array(),
            'include'           => array(),
            'number'            => '',
            'fields'            => 'all',
            'slug'              => '',
            'parent'            => '',
            'hierarchical'      => true,
            'child_of'          => 0,
            'get'               => '',
            'name__like'        => '',
            'description__like' => '',
            'pad_counts'        => false,
            'offset'            => '',
            'search'            => '',
            'cache_domain'      => 'core'
        );

        $terms = get_terms('categorias_trabalhos', $args);
        ?>

        <?php foreach ($terms as $term) : ?>
            <li><a href="#" data-filter=".<?php echo $term->slug ?>"><?php echo $term->name ?></a></li>
        <?php endforeach; ?>

    </ul><!-- #portfolio-filter end -->

    <!-- Portfolio Items
    ============================================= -->
    <div id="portfolio" class="wow fadeIn clearfix">

        <?php while ( $trabalhos->have_posts() ) : $trabalhos->the_post(); ?>
        <?php $terms = get_the_terms($post->ID, 'categorias_trabalhos'); ?>

        <article class="portfolio-item <?php foreach ($terms as $term) : echo $term->slug; endforeach; ?>">
        <div class="wow fadeIn">
        <a href="<?php the_permalink() ?>">
            <div class="portfolio-image">
                <img src="<?php echo get_field('imagem_de_destaque'); ?>">
                <!-- <?php the_post_thumbnail('trabalhos_crop'); ?> -->
                <div class="portfolio-overlay">
                    <div class="portfolio-desc">
                        <h3 class="title-with-bord"><?php the_title() ?></h3>
                        <?php if (!empty($terms)) : ?>
                            <span><?php foreach ($terms as $term) : echo $term->name; endforeach; ?></span>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </a>
        </div>
        </article>

        <?php endwhile; ?>

    </div><!-- #portfolio end -->

    <!-- infinite load button start -->
    <div id="load-more-portfolio"><a href="<?php echo site_url('trabalhos/page/2') ?>"></a></div>
    <button id="load-infinite" style="padding: 30px 0;">Veja Mais</button>
    <!-- infinite load button end -->

    <!-- Portfolio Script
    ============================================= -->
    <script type="text/javascript">

        jQuery(window).load(function(){
            var $container = $('#portfolio');
            $container.isotope({ transitionDuration: '0.65s', layoutMode: 'packery', });
            $('#portfolio-filter a').click(function(){
                $('#portfolio-filter li').removeClass('activeFilter');
                $(this).parent('li').addClass('activeFilter');
                var selector = $(this).attr('data-filter');
                $container.isotope({ filter: selector });
                return false;
            });

            $(window).resize(function() {
                $container.isotope('layout');
            });

                // Infinite Scroll
                $container.infinitescroll({
                    loading: {
                        finishedMsg: 'There is no more',
                        msgText: 'loading',
                        speed: 'normal'
                    },

                state: {
                isDone: false
                },
                    navSelector  : '#load-more-portfolio',
                    nextSelector : '#load-more-portfolio a',
                    itemSelector : 'article.portfolio-item',
                },
                // Infinite Scroll Callback
                function( newElements ) {
                    $container.isotope( 'appended', $( newElements ) );
                    var t = setTimeout( function(){ $container.isotope('layout'); }, 2000 );
                });

            $(window).unbind();
            $("#load-infinite").click(function(){
                $container.infinitescroll('retrieve');
                console.log("teste");
                return false;
            });
        });

    </script><!-- Portfolio Script End -->
</section>
<!-- portfolio section end -->
<?php endif; wp_reset_postdata();   ?>
