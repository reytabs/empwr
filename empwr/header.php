<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bootscore
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="https://gmpg.org/xfn/11">
  <!-- Favicons -->
  <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon/favicon-16x16.png">
  <link rel="manifest" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon/site.webmanifest">
  <link rel="mask-icon" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon/safari-pinned-tab.svg" color="#0d6efd">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="theme-color" content="#ffffff">
  <?php wp_head(); ?>
  <script type="text/javascript">
  ( function($){
    $('a[href*=#]:not([href=#])').click(function() {
      if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
        if (target.length) {
          $('html,body').animate({
            scrollTop: target.offset().top
          }, 500);
          return false;
        }
      }
    });
  }) (jQuery);
  </script>
  <style media="screen">
  .wpcf7-form-control-wrap textarea::-webkit-input-placeholder{
    color: white!important;
  }
  .wpcf7-form-control-wrap textarea::-moz-placeholder{
    color: white!important;
  }
  .wpcf7-form-control-wrap textarea:-ms-input-placeholder{
    color: white!important;
  }
  .wpcf7-form-control-wrap textarea:-moz-placeholder{
    color: white!important;
  }
  .label-ar{
    display: none!important;
  }
  .bg-section-1-ar,
  .section-1-graphic-ar{
    display: none!important;
  }
  .rtl .navbar-nav{
    justify-content: flex-end!important;
    width: 100%!important;
  }
  .rtl .navbar .dropdown .btn .me-2{
    margin-right: 0!important;
    margin-left: 0.5rem !important;
  }
  .rtl .bg-section-1-ar,
  .rtl .section-1-graphic-ar,
  .rtl .label-ar{
    display: block!important;
  }
  .rtl .bg-section-1-en,
  .rtl .section-1-graphic-en,
  .rtl .label-en{
    display: none!important;
  }
  .rtl .text-end{
    text-align: left!important;
  }
  .rtl .text-start{
    text-align: right!important;
  }
  .rtl .bubble-speech.border-bottom-right-rounded-4,
  .rtl .bubble-speech.border-bottom-right-rounded-4:before{
    border-bottom-right-radius: 30px !important;
  }
  .rtl .bubble-speech.border-bottom-left-rounded-30,
  .rtl .bubble-speech.border-bottom-left-rounded-30:before{
    border-bottom-left-radius: 4px !important;
  }
  .rtl .bubble-speech.ms-n11{
    margin-left: 0!important;
    margin-right: -6rem !important;
  }
  .rtl .wpcf7-list-item.first{
    margin: 0!important;
  }
  .rtl .navbar-nav .dropdown-menu .d-flex{
    flex-direction: row-reverse!important;
  }
  .rtl .d-flex.rtl-flex-row-reverse{
    flex-direction: row-reverse!important;
  }
  </style>
</head>

<body <?php body_class(); ?>>

  <?php wp_body_open(); ?>

  <div id="to-top"></div>

  <div id="page" class="site">

    <header id="masthead" class="site-header">

      <div class="fixed-top bg-brand-1">

        <nav id="nav-main" class="navbar navbar-expand-lg navbar-light">

          <div class="container">

            <!-- Navbar Brand -->
            <a class="navbar-brand xs d-md-none w-120px" href="<?php echo esc_url(home_url()); ?>"><img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/img/logo/logo.svg" alt="logo" class="logo xs"></a>
            <a class="navbar-brand md d-none d-md-block w-120px" href="<?php echo esc_url(home_url()); ?>"><img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/img/logo/logo.svg" alt="logo"></a>

            <!-- Offcanvas Navbar -->
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvas-navbar">
              <div class="offcanvas-header bg-light">
                <span class="h5 mb-0"><?php esc_html_e('Menu', 'bootscore'); ?></span>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
              </div>
              <div class="offcanvas-body">
                <!-- Bootstrap 5 Nav Walker Main Menu -->
                <?php
                wp_nav_menu(array(
                  'theme_location' => 'main-menu',
                  'container' => false,
                  'menu_class' => '',
                  'fallback_cb' => '__return_false',
                  'items_wrap' => '<ul id="bootscore-navbar" class="navbar-nav ms-auto %2$s">%3$s</ul>',
                  'depth' => 2,
                  'walker' => new bootstrap_5_wp_nav_menu_walker()
                ));
                ?>
                <!-- Bootstrap 5 Nav Walker Main Menu End -->
              </div>
            </div>


            <div class="header-actions d-flex align-items-center">

              <!-- Top Nav Widget -->
              <div class="top-nav-widget">
                <?php if (is_active_sidebar('top-nav')) : ?>
                  <div>
                    <?php dynamic_sidebar('top-nav'); ?>
                  </div>
                <?php endif; ?>
              </div>

              <!-- Searchform Large -->
              <div class="d-none d-lg-block ms-1 ms-md-2 top-nav-search-lg">
                <?php if (is_active_sidebar('top-nav-search')) : ?>
                  <div>
                    <?php dynamic_sidebar('top-nav-search'); ?>
                  </div>
                <?php endif; ?>
              </div>

              <!-- Search Toggler Mobile -->
              <button class="btn btn-outline-secondary d-lg-none ms-1 ms-md-2 top-nav-search-md" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-search" aria-expanded="false" aria-controls="collapse-search">
                <i class="fas fa-search"></i>
              </button>

              <!-- Navbar Toggler -->
              <button class="btn btn-outline-secondary d-lg-none ms-1 ms-md-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvas-navbar" aria-controls="offcanvas-navbar">
                <i class="fas fa-bars"></i>
              </button>

            </div><!-- .header-actions -->

          </div><!-- .container -->

        </nav><!-- .navbar -->

        <!-- Top Nav Search Mobile Collapse -->
        <div class="collapse container d-lg-none" id="collapse-search">
          <?php if (is_active_sidebar('top-nav-search')) : ?>
            <div class="mb-2">
              <?php dynamic_sidebar('top-nav-search'); ?>
            </div>
          <?php endif; ?>
        </div>

      </div><!-- .fixed-top .bg-light -->

    </header><!-- #masthead -->

    <?php bootscore_ie_alert(); ?>
