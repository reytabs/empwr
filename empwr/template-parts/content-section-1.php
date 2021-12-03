<?php

/**
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Bootscore
 */

?>

<section class="pt-5 position-relative bg-brand-1 section-1" id="section-home">
  <div class="bg-center bg-cover position-absolute left-0 top-0 w-100 h-100 bg-section-1-en" style="background-image: url(<?php echo esc_url(get_stylesheet_directory_uri()); ?>/img/bg/bg-section-1.jpg)"></div>
  <div class="bg-center bg-cover position-absolute left-0 top-0 w-100 h-100 bg-section-1-ar" style="background-image: url(<?php echo esc_url(get_stylesheet_directory_uri()); ?>/img/bg/bg-section-1-rtl.jpg)"></div>
  <div class="container mt-sm-5 pt-5 position-relative z-index-1 pb-5">
    <div class="row pt-lg-5">
      <div class="col-lg-4">

        <h1 class="lh-p8 text-white mb-4 pb-2">
          EMPWR<br />
          <span class="h4"><?php echo get_field( "section_1_your_safe" ); ?></span>
        </h1>
        <div class="text-color-1 mb-5">
          <p><?php echo get_field( "section_1_sharing_your_thoughts" ); ?></p>
          <p><?php echo get_field( "section_1_signup_experience" ); ?></p>

          <div class="fields-v2 mt-sm-5">
          <?php echo do_shortcode( get_field('section_1_signup_form') ); ?>
          </div>
          <div class="mt-4">
            <span class="text-primary-dark"><?php echo get_field( "section_1_start_scrolling" ); ?></span> <?php echo get_field( "section_1_to_know_omore" ); ?>
          </div>
        </div>
      </div>
      <div class="col-lg-8 text-end">
        <div class="position-relative d-block d-lg-inline-block section-1-end mx-auto">
          <div class="bubble-speech bg-warning position-absolute px-3 px-md-4 py-2 border-top-right-rounded-30 border-top-left-rounded-30 border-bottom-left-rounded-30 border-bottom-right-rounded-4 duplicate-to-white mt-10 mt-md-15 ms-n11">
            <div class="position-relative z-index-1 ms-1 mt-n1 text-start">
              <div class="h4 mb-0 font-primary-black"><?php echo get_field( "section_1_empwr_app" ); ?></div>
              <div class="font-primary-bold text-primary mt-n1"><?php echo get_field( "section_1_coming_soon" ); ?></div>
            </div>
          </div>
          <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/img/graphic-1.png" class="img-responsive w-450px section-1-graphic-en"/>
          <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/img/graphic-1-rtl.png" class="img-responsive w-450px section-1-graphic-ar"/>
        </div>
      </div>
    </div>
  </div>
</section>
