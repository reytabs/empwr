<?php

/**
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Bootscore
 */

?>

<section class="py-sm-5 text-gray-2 bg-brand-3 section-2">
  <div class="container">
    <div class="row">
      <div class="col-lg-4">
        <h2 class="font-primary-bold text-white mb-5 d-lg-none text-center text-lg-start"><?php echo get_field( "section_2_by_ally_salama" ); ?></h2>
        <div class="px-5 px-lg-0">
          <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/img/people-1.png" class="img-responsive d-block mx-auto"/>
        </div>
      </div>
      <div class="col-lg-8">
        <div class="px-md-5 d-flex align-items-center h-100">
          <div class="px-md-5">
            <h2 class="font-primary-bold text-white mb-5 d-none d-lg-block"><?php echo get_field( "section_2_by_ally_salama" ); ?></h2>
            <div class="lh-lg text-center text-lg-start">
              <p><?php echo get_field( "section_2_ally_salama_forbes" ); ?></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</section>
