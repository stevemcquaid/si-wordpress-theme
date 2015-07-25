<?php
/**
 * The template for displaying archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each one. For example, tag.php (Tag archives),
 * category.php (Category archives), author.php (Author archives), etc.
 *
 *
 * @package SI
 */

get_header(); ?>
  <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/script.js"></script>


	<section id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
      <div id="description">
        <p>We evaluate, plan, launch, and operate technology-driven experiences that generate revenue and connect brands with customers.</p>
      </div>
      <div class="block">
        <h1 id="title">CASE STUDIES</h1>
      </div>
  		<?php if ( have_posts() ) : ?>
      <?php
			// Start the Loop.
        while ( have_posts() ) : the_post(); ?>
          <div class="accordion block">
            <div class="header">
              <img src='<?php echo wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' )[0]; ?>'>
                <?php	$title = explode("^", get_the_title()); ?>
                <div class="header-title">
                  <h2><?php echo $title[0]; ?></h2>
                  <h1><?php echo $title[1]; ?></h1>
                </div>
              </div>
              <div class="content">
              <?php the_excerpt( '<p>', '' ); ?>
              <h2 class="moreLink"><a href="<?php echo post_permalink(); ?>">MORE ></a></h2>
              </p>
            </div>
          </div>
      <?php

			// End the loop.
			endwhile;

		endif;
		?>

		</main><!-- .site-main -->
	</section><!-- .content-area -->

<?php get_footer(); ?>
