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
    <div class="row">
      <div class="col-md-4">
        <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/img/people-1.png" class="img-responsive"/>
      </div>
      <div class="col-md-8">
        <div class="px-5 d-flex align-items-center h-100">
          <div class="px-5">
            <h2 class="font-primary-bold text-white mb-5"><?php echo get_field( "section_2_by_ally_salama" ); ?></h2>
            <div class="lh-lg">
              <p><?php echo get_field( "section_2_ally_salama_forbes" ); ?></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</section>
