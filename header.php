<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package blueflowedmedia
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'blueflowermedia' ); ?></a>

	<header id="masthead" class="site-header">
		<nav id="site-navigation" class="main-navigation fixed container-navbar">
      <!-- navbar left -->
			<div class="nav-left">
        <?php the_custom_logo(); ?>
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><h3 class="site-title"><?php bloginfo( 'name' ); ?></h3></a>
      </div>
      <!-- navbar middle -->
      <div class="nav-middle">
        <?php
          wp_nav_menu( array(
            'theme_location' => 'menu-1',
            'menu_id'        => 'primary-menu',
          ) );
        ?>
      </div>
      <!-- navbar right -->
      <div class="nav-right">
        <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'blueflowermedia' ); ?></button>
				<a href=""><button class="nav-contact" type="button" name="button">Contact Us</button></a>
      </div>
		</nav>
	</header>

	<div id="content" class="site-content">
