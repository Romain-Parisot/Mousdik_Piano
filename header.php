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
<div class="global_div dp_none" ></div>
<div id="page" class="site">
	<header id="masthead" class="site-header">
		<?php the_custom_logo(); ?>
        <nav>
            <?php wp_nav_menu(array("theme_location" => "header")) ?>
        </nav>
		<div class="dp_none2 div_bruger">
			<button class="burger">
				<span class="bar bar_up"></span>
				<span class="bar bar_mid"></span>
				<span class="bar bar_down"></span>
			</button>
		</div>
		<div class="main_div_menu_burger dp_none animation_header_burger1">
			<div class="sec_div_menu_burger">
				<div class="div_menu_burger">
					<?php wp_nav_menu(array("theme_location" => "rénovation")) ?>
				</div>
				<div class="div_menu_burger">
					<?php wp_nav_menu(array("theme_location" => "pianos")) ?>
				</div>
				<div class="div_menu_burger">
					<?php wp_nav_menu(array("theme_location" => "ou suis-je")) ?>
				</div>
				<div class="div_menu_burger">
					<?php wp_nav_menu(array("theme_location" => "profil")) ?>
				</div>
				<div class="div_menu_burger">
					<p><a href="#">Favoris</a></p>
				</div>
			</div>
		</div>
        <div class="div_logo_top_header">
            <div class="div_img_logo_top_droit">
                <img src="<?php echo esc_url( get_template_directory_uri() . '/images/logo_heart.png' ); ?>" alt="icone heart" class="logo_top_droit_header"> 
            </div>
            <div class="div_img_logo_top_droit div_img_logo_top_droit_user">
                <div class="div_animation_header">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/images/logo_user.png' ); ?>" alt="icone user" class="logo_top_droit_header logo_top_droit_header_user" > 
                </div>
                <div class="div_animation_header3 dp_none ">
                    <div class="main_div_menu_logo_header_user">
                        <div>
							<?php wp_nav_menu(array("theme_location" => "profil")) ?>
                        </div>
                        <div>
                            <a href=""><p>Se déconnecter</p></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
	</header>
	<script src=" <?php echo get_template_directory_uri() . '\js\animation_header.js' ?>"></script> 
