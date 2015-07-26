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
 * blog page
 *
 * @package SI
 */

get_header(); ?>


	<section id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
      <div class="block">
        <h1 id="title"><?php echo the_title(); ?></h1>
      </div>
  		<?php if ( have_posts() ) : ?>
      <?php
			// Start the Loop.
        while ( have_posts() ) : the_post(); ?>
          <div class="accordion block">
            <div class="header">
                <?php the_title( '<h2>', '</h2>' ); ?>
              </div>
              <div class="content">
              <?php the_content( '<p>', '' ); ?>
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
