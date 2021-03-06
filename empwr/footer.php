<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bootscore
 */

?>

<footer class="bg-brand-1 py-4">
  <div class="container">
    <div class="row">
      <div class="col-sm-6 text-center text-sm-start mb-4 mb-sm-0">
        <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/img/logo/logo.svg" class="w-120px">
      </div>
      <div class="col-sm-6 text-center text-sm-right text-a-white">
        <?php
        wp_nav_menu(array(
          'theme_location' => 'footer-menu',
          'container' => false,
          'menu_class' => '',
          'fallback_cb' => '__return_false',
          'items_wrap' => '<ul id="footer-menu" class="p-0 d-block d-sm-flex justify-content-end nav %2$s">%3$s</ul>',
          'depth' => 1,
          'walker' => new bootstrap_5_wp_nav_menu_walker()
        ));
        ?>
      </div>
    </div>
  </div>
</footer>

<div class="top-button position-fixed zi-1020 d-none">
  <a href="#to-top" class="btn btn-primary shadow"><i class="fas fa-chevron-up"></i></a>
</div>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>
