<?php

/**
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Bootscore
 */

?>

<section class="bg-center bg-cover pt-5" style="background-image: url(<?php echo esc_url(get_stylesheet_directory_uri()); ?>/img/bg/bg-section-1.jpg)">
  <div class="container mt-5 pt-5">
    <div class="row pt-5">
      <div class="col-md-4">

        <h1 class="lh-p8 text-white mb-4">
          EMPWER<br />
          <span class="h4">Your Safe Space, 24/7.</span>
        </h1>
        <div class="text-color-1 mb-5">
          <p>Sharing your thoughts can be easy. Sometimes it isn't. EMPWR is a safe social network that’s based on support. A space where you can be safe, anonymous and free to be yourself.</p>

          <p>Sign up to be the first to experience EMPWR.</p>
          <div class="fields-v2">
            <?php echo do_shortcode( '[contact-form-7 id="8" title="Contact form 1"]' ); ?>
          </div>
        </div>
      </div>
      <div class="col-md-8">

      </div>
    </div>
  </div>
</section>
