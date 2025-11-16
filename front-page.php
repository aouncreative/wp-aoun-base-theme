<?php
/**
 * Template: Startseite
 */
get_header();

$hero_data = [
    'title'    => aoun_base_get_meta( get_the_ID(), '_aoun_base_hero_title' ),
    'subtitle' => aoun_base_get_meta( get_the_ID(), '_aoun_base_hero_subtitle' ),
    'button'   => aoun_base_get_meta( get_the_ID(), '_aoun_base_hero_button_label' ),
    'url'      => aoun_base_get_meta( get_the_ID(), '_aoun_base_hero_button_url' ),
];

// Hero-Section Modul
get_template_part( 'template-parts/sections/hero', null, $hero_data );

// später: weitere Sections
// get_template_part('template-parts/sections/features', null, $features_data);

get_footer();
