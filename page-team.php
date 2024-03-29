<?php
/**
 * The template for displaying the cast studies
 *
 * @package SI
 */

get_header(); ?>

  <div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
      
      <?php if ( have_posts() ) : ?>
      <?php
      // Start the Loop.
        while ( have_posts() ) : the_post(); ?>
        
          <div class="accordion block">
            <div class="header">
              <img src='<?php echo wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' )[0]; ?>'>
                <?php $title = explode("^", get_the_title()); ?>
                <div class="header-title">
                  <h2><?php echo the_excerpt(); ?></h2>
                  <h1><?php echo $title[0]; ?></h1>
                </div>
              </div>
              <div class="content">
                <?php the_content( '<p>', '</p>' ); ?>
              </div>
              <div class="backLink">
                <h1><a href="<?php echo get_home_url(); ?>">< Back</a></h1>
              </div>
          </div>

      <?php

      // End the loop.
      endwhile;

    endif;
    ?>          
          
    </main><!-- .site-main -->
  </div><!-- .content-area -->

<?php get_footer(); ?>


