<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package mousdik
 */

get_header();
?>

	<main id="primary" class="site-main">

		<?php echo do_shortcode('[metaslider id="22"]'); ?>
		
		<div class="prestation">

			<h1>Nos prestations</h1>

			<div class="prestations">

				<div class="presta">
					<div class="prez-img1">
						<div class="pres-img">
							<img src="<?php echo esc_url(get_template_directory_uri() . "/images/homepage/logo_livraison.png")?>">
						</div>
					</div>
					<div class="presta-text">
						<h3>Livraison à domicile</h3>
						<p>J’effectue des livraisons à domicile</p>
					</div>
				</div>

				<div class="presta">
					<div class="prez-img1">
						<div class="pres-img">
							<img src="<?php echo esc_url(get_template_directory_uri() . "/images/homepage/logo_reparation.png")?>">
						</div>
					</div>
					<div class="presta-text">
						<h3>Réparations</h3>
						<p>Je m’occupe de renover votre piano à mon atelier ou à votre domicile</p>
					</div>
				</div>

				<div class="presta">
					<div class="prez-img1">
						<div class="pres-img">
							<img src="<?php echo esc_url(get_template_directory_uri() . "/images/homepage/logo_deplacement.png")?>">
						</div>
					</div>
					<div class="presta-text">
						<h3>Déplacement</h3>
						<p>Je me déplace chez vous pour effectuer des répérations si vous le souhaitez</p>
					</div>
				</div>
			</div>

		</div>

		<div class="presentation">
			<div class="prez-img2">
				<img src="<?php echo esc_url(get_template_directory_uri() . "/images/homepage/photo_mousdik.png")?>">
			</div>
			<div class="prez-desc">
				<h2>Halim Mousdik</h2>
				<p>Ma plus grande satisfaction est de voir le pianiste
					prendre davantage de plaisir après mon intervention!</p>
			</div>
		</div>

	</main>

<?php
get_footer();
