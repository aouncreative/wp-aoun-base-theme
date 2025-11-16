<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width,initial-scale=1">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header class="aoun-header">
  <div class="aoun-header__inner aoun-container">
    <div class="aoun-header__branding">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
        <?php bloginfo( 'name' ); ?>
      </a>
    </div>

    <nav class="aoun-header__nav">
      <?php
      wp_nav_menu( [
          'theme_location' => 'primary',
          'container'      => false,
          'fallback_cb'    => false,
      ] );
      ?>
    </nav>
  </div>
</header>