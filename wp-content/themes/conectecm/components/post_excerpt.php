<!-- Post Article
============================================= -->
<article class="post wow fadeIn clearfix">    
    <div class="post-date">
        <span class="date-number"><?php echo get_the_date('d', $post->ID); ?></span>
        <span class="date-month"><?php echo get_the_date('M'); ?></span>
    </div>
    
    <div class="post-meta">
        <h2 class="post-title"><?php the_title(); ?></h2>
        <div class="meta-post-top">
            <span class="author"><i class="smaze icon-user"></i><?php the_author(); ?></span>
            <span class="comments"><i class="smaze icon-talk-chat-2"></i><?php echo comments_number(); ?></span>
        </div>
    </div>

    <div class="post-content">

        <?php if ( has_post_thumbnail() ) : ?>
            <div class="post-thumb">
                <?php the_post_thumbnail('full', array('class' => 'img-post') ); ?>
            </div>
        <?php endif; ?>

        <div class="post-excerpt">
            <p><?php the_excerpt(); ?></p>
        </div> 
        <a href="<?php the_permalink(); ?>" class="read-more btn">Continue Lendo</a>
    </div>
</article>
<!-- post article end -->