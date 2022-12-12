<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mousdik
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<header id="masthead" class="site-header">
		<?php the_custom_logo(); ?>
		<nav>
			<?php wp_nav_menu(array("theme_location" => "header")) ?>
		</nav>
		<div class="div_logo_top_header">
			<img src="<?php echo esc_url( get_template_directory_uri() . '/images/logo_heart.png' ); ?>" alt="icone heart" class="logo_top_droit_header"> 
			<img src="<?php echo esc_url( get_template_directory_uri() . '/images/logo_user.png' ); ?>" alt="icone user" class="logo_top_droit_header logo_top_droit_header_user"> 
		</div>
				
	</header><!-- #masthead -->
