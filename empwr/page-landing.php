<?php

/**
 * Template Name: Landing Page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Bootscore
 */

get_header();
get_template_part( 'template-parts/content', 'section-1' );
get_template_part( 'template-parts/content', 'section-2' );
get_template_part( 'template-parts/content', 'section-3' );
get_template_part( 'template-parts/content', 'section-4' );
?>
<?php
get_footer();
