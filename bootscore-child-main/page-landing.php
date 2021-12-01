<?php

/**
 * Template Name: Landing Page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Bootscore
 */

get_header();
?>
<div class="pt-5 bg-brand-1">
  <div class="mt-5 text-white">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <?php get_template_part( 'template-parts/content', 'section-1' ); ?>
        </div>
      </div>
    </div>
  </div>
</div>
<?php
get_footer();
