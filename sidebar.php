<?php
/**
 * The sidebar
 *
 * @package SI
 */
?>

  <div id="widget-area" class="widget-area" role="complementary">
    <?php if ( is_home() ) {
      dynamic_sidebar( 'sidebar-home' );
    } ?>
  </div><!-- .widget-area -->

