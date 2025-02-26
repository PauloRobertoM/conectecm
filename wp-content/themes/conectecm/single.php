<?php get_header(); ?>

<!-- CONTENT WRAPPER
============================================= -->
<div id="content-wrapper" class="container wrapper" style="margin-top: 60px;">
   
   <!-- Blog Content
   ============================================= -->
   <div class="single-blog col-md-8">

      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <!-- Post Article
      ============================================= -->
      <article class="post wow fadeIn clearfix">    
         <div class="post-date">
            <span class="date-number"><?php the_date('d'); ?></span>
            <span class="date-month"><?php echo get_the_date('M'); ?></span>
         </div>

         <div class="post-meta">
         <h2 class="post-title"><?php the_title() ?></h2>
            <div class="meta-post-top">
               <span class="author"><i class="smaze icon-user"></i><?php the_author(); ?></span>
               <span class="comments"><i class="smaze icon-talk-chat-2"></i> <?php echo comments_number(); ?></span>
            </div>
         </div>

         <div class="post-content">
            <div class="post-thumb">
               <?php the_post_thumbnail('full', array('class' => 'img-post') ); ?>
            </div>
            <div class="inner-post">
               <?php the_content(); ?>
            </div>
         </div>

         <!-- meta bottom -->
         <div class="meta-bottom clearfix">
            <!-- social share -->
            <div class="social-share col-md-3">
               <h4 class="share-title" target="_blank">Compartilhe</h4>
               <a href="http://www.facebook.com/share.php?u=<?php the_permalink(); ?>&title=<?php the_title(); ?>" class=" facebook" target="_blank"><i class="ion-social-facebook"></i></a>
               <a href="http://twitter.com/home?status=<?php the_title(); ?>+<?php the_permalink(); ?>" class=" twitter" target="_blank"><i class="smaze icon-twitter-alt"></i></a>
               <a href="http://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink(); ?>&title=<?php the_title(); ?>&source=<?php bloginfo('name'); ?>" class=" linkedin" target="_blank"><i class="smaze icon-linkedin"></i></a>
            </div>
            <!-- social share end -->

            <?php $posttags = get_the_tags();
            if ($posttags) : ?>
            <!-- tags -->
            <div class="tags-bottom col-md-9">
               <h4 class="tag-title"><i class="smaze icon-tag-outline"></i>Tags</h4>
               <span>
               <?php foreach($posttags as $key => $tag) : ?>
                  <a href="<?php echo get_tag_link($tag->term_id); ?>"><?php echo $tag->name; ?></a>,
               <?php endforeach; ?>
               </span>

               <!--
               <a href="#">Web design</a>, <a href="#">Project</a>, <a href="#">Photography</a>, <a href="#">Image</a>, <a href="#">Agency</a>, <a href="#">Marketing</a>, <a href="#">advertising</a>, <a href="#">branding</a>, <a href="#">Mobile</a>, <a href="#">Design</a></span>
               -->
            </div>
            <!-- tags end -->
            
            <?php endif; ?>
         </div>
         <!-- mtea-bottom end -->

         <?php comments_template(); ?> 

      </article>
      <!-- post article end -->
      <?php endwhile; else: ?>
      
         <p><?php _e('Post não existe.'); ?></p>
      <?php endif; ?>

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