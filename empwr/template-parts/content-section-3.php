<?php

/**
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Bootscore
 */

?>

<section class="py-5 text-gray-2 bg-brand-3">
  <div class="container">

    <h2 class="h5 text-white text-center mb-5"><?php echo get_field( "section_3_our_partners" ); ?></h2>

    <div class="d-flex justify-content-center align-items-center">
      <div class="px-3">
        <div class="p-3 rounded-8 w-180px h-130px position-relative bg-brand-1">
          <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/img/logo/logo-company-1.png" class="img-responsive position-absolute top-0 bottom-0 start-0 end-0 m-auto w-60" />
        </div>
      </div>
      <div class="px-3">
        <div class="p-3 rounded-8 w-180px h-130px position-relative bg-brand-1">
          <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/img/logo/logo-company-2.png" class="img-responsive position-absolute top-0 bottom-0 start-0 end-0 m-auto w-80"/>
        </div>
      </div>
      <div class="px-3">
        <div class="p-3 rounded-8 w-180px h-130px position-relative bg-brand-1">
          <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/img/logo/logo-company-3.png" class="img-responsive position-absolute top-0 bottom-0 start-0 end-0 m-auto w-80"/>
        </div>
      </div>
    </div>
  </div>

</section>
