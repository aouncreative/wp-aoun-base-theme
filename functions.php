<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// Pfad-Konstanten
define( 'AOUN_BASE_PATH', get_template_directory() );
define( 'AOUN_BASE_URI',  get_template_directory_uri() );

// Includes
require_once AOUN_BASE_PATH . '/inc/setup.php';
require_once AOUN_BASE_PATH . '/inc/cpt.php';
require_once AOUN_BASE_PATH . '/inc/metaboxes.php';
require_once AOUN_BASE_PATH . '/inc/helpers.php';
