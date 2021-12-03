<?php

/**
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Bootscore
 */

?>

<section id="section-contact-us" class="bg-brand-3 text-white pb-5">
  <div class="py-sm-5 bg-bottom-center bg-cover" style="background-image: url(<?php echo esc_url(get_stylesheet_directory_uri()); ?>/img/bg/bg-section-4.jpg)">
    <div class="container text-center pb-5 pt-2 mb-5 mt-sm-5">
      <h2 class="h1 mt-5"><?php echo get_field( "section_4_contact_us" ); ?></h2>
      <h3 class="mb-5"><?php echo get_field( "section_4_we_respond_within_24_hours" ); ?></h2>
    </div>
  </div>
  <div class="container">
    <div class="d-md-flex justify-content-center">
      <div class="mx-lg-5 px-2 text-center mb-4 mb-md-0">
        <div class="w-64px h-64px rounded-10 bg-gray-3 position-relative mx-auto mb-4">
          <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/img/icons/icon-map-pin.png" class="position-absolute top-0 bottom-0 start-0 end-0 m-auto">
        </div>
        <div class="font-primary-bold text-color-1 mb-3 h5"><?php echo get_field( "section_4_location" ); ?></div>
        <div class="font-primary-bold text-primary h5"><?php echo get_field( "secction_4_dubai_silicon_oasis_uae" ); ?></div>
      </div>
      <div class="mx-lg-5 px-2 text-center mb-4 mb-md-0">
        <div class="w-64px h-64px rounded-10 bg-gray-3 position-relative mx-auto mb-4">
          <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/img/icons/icon-phone.png" class="position-absolute top-0 bottom-0 start-0 end-0 m-auto">
        </div>
        <div class="font-primary-bold text-color-1 mb-3 h5"><?php echo get_field( "section_4_whatsapp" ); ?></div>
        <div class="font-primary-bold text-primary h5 d-flex justify-content-center rtl-flex-row-reverse">
          <div>+</div>
          <div><?php echo get_field( "section_4_number" ); ?></div>
        </div>
      </div>
      <div class="mx-lg-5 px-2 text-center mb-4 mb-md-0">
        <div class="w-64px h-64px rounded-10 bg-gray-3 position-relative mx-auto mb-4">
          <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/img/icons/icon-mail.png" class="position-absolute top-0 bottom-0 start-0 end-0 m-auto">
        </div>
        <div class="font-primary-bold text-color-1 mb-3 h5"><?php echo get_field( "section_4_email" ); ?></div>
        <div class="font-primary-bold text-primary h5"><?php echo get_field( "section_4_email_address" ); ?></div>
      </div>
    </div>
  </div>
  <div class="container bg-brand-1 mt-5">
    <div class="px-0 py-5 px-md-5">
      <div class="px-lg-5 fields-v3">
        <?php echo do_shortcode( get_field('section_4_contact_form') ); ?>
      </div>
    </div>
  </div>
</section>
