<?php

/**
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Bootscore
 */

?>

<section id="section-contact-us" class="bg-brand-3 text-white pb-5">
  <div class="py-5 bg-bottom-center bg-cover" style="background-image: url(<?php echo esc_url(get_stylesheet_directory_uri()); ?>/img/bg/bg-section-4.jpg)">
    <div class="container text-center pb-5 pt-2 my-5">
      <h2 class="h1 mt-5"><?php echo get_field( "section_4_contact_us" ); ?></h2>
      <h3 class="mb-5"><?php echo get_field( "section_4_we_respond_within_24_hours" ); ?></h2>
    </div>
  </div>
  <div class="container">
    <div class="d-flex justify-content-center">
      <div class="mx-5 px-2 text-center">
        <div class="w-64px h-64px rounded-10 bg-gray-3 position-relative mx-auto mb-4">
          <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/img/icons/icon-map-pin.png" class="position-absolute top-0 bottom-0 start-0 end-0 m-auto">
        </div>
        <div class="font-primary-bold text-color-1 mb-3 h5"><?php echo get_field( "section_4_location" ); ?></div>
        <div class="font-primary-bold text-primary h5"><?php echo get_field( "secction_4_dubai_silicon_oasis_uae" ); ?></div>
      </div>
      <div class="mx-5 px-2 text-center">
        <div class="w-64px h-64px rounded-10 bg-gray-3 position-relative mx-auto mb-4">
          <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/img/icons/icon-phone.png" class="position-absolute top-0 bottom-0 start-0 end-0 m-auto">
        </div>
        <div class="font-primary-bold text-color-1 mb-3 h5"><?php echo get_field( "section_4_whatsapp" ); ?></div>
        <div class="font-primary-bold text-primary h5 d-flex rtl-flex-row-reverse">
          <div>+</div>
          <div><?php echo get_field( "section_4_number" ); ?></div>
        </div>
      </div>
      <div class="mx-5 px-2 text-center">
        <div class="w-64px h-64px rounded-10 bg-gray-3 position-relative mx-auto mb-4">
          <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/img/icons/icon-mail.png" class="position-absolute top-0 bottom-0 start-0 end-0 m-auto">
        </div>
        <div class="font-primary-bold text-color-1 mb-3 h5"><?php echo get_field( "section_4_email" ); ?></div>
        <div class="font-primary-bold text-primary h5"><?php echo get_field( "section_4_email_address" ); ?></div>
      </div>
    </div>
  </div>
  <div class="container bg-brand-1 mt-5">
    <div class="p-5">
      <div class="px-5 fields-v3">
        <?php echo do_shortcode( get_field('section_4_contact_form') ); ?>
      </div>
    </div>
  </div>
</section>
