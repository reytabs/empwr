<?php

// style and scripts
add_action('wp_enqueue_scripts', 'bootscore_child_enqueue_styles');
function bootscore_child_enqueue_styles() {

  // style.css
  wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');

  // Compiled Bootstrap
  $modified_bootscoreChildCss = date('YmdHi', filemtime(get_stylesheet_directory() . '/css/lib/bootstrap.min.css'));
  wp_enqueue_style('bootstrap', get_stylesheet_directory_uri() . '/css/lib/bootstrap.min.css', array('parent-style'), $modified_bootscoreChildCss);

  // custom.js
  wp_enqueue_script('custom-js', get_stylesheet_directory_uri() . '/js/custom.js', false, '', true);
}

add_filter('wp_nav_menu_items', 'add_last_btn_item', 10, 2);
function add_last_btn_item($items, $args){
    if( $args->theme_location == 'main-menu' ){
        $items .= '
          <div class="dropdown menu-item menu-item-type-custom menu-item-object-custom nav-item">
            <button class="btn btn-outline-light rounded-50" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
              English
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
              <li><a class="dropdown-item" href="#">English</a></li>
              <li><a class="dropdown-item" href="#">Arabic</a></li>
            </ul>
          </div>
        ';
    }
    return $items;
}
