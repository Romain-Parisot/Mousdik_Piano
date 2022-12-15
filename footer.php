<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mousdik
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="footer__sub">
			<h2>Mousdik & Vous</h2>
			<nav>
			<?php wp_nav_menu(array("theme_location" => "footer")) ?>
			</nav>
		</div>

		<div class="footer__sub">
			<h2>Réseaux</h2>
			<p>Suivez-nous sur nos réseaux sociaux !</p>
			<div class="footer__socials">
				<a href="https://fr-fr.facebook.com/mousdikpianos"><img src="<?php echo esc_url( get_template_directory_uri() . '/images/logo_facebook.png' ); ?>" alt="logo_facebook"></a>
				<a href="https://www.instagram.com/mousdikpianos/"><img src="<?php echo esc_url( get_template_directory_uri() . '/images/logo_instagram.png' ); ?>" alt="logo_instagram"></a>
				<a href="https://www.youtube.com/@mousdikpianos"><img src="<?php echo esc_url( get_template_directory_uri() . '/images/logo_youtube.png' ); ?>" alt="logo_youtube"></a>
			</div>
			<h2>Contact</h2>
			<p>Téléphone : 06 60 10 92 07</p>
			<p>Adresse : 16 bis Grande Rue, 91260 Juvisy-sur-Orge</p>
			<p>Ouvert du Mardi au Samedi de 10h à 19h</p>
		</div>

		<div class="footer__sub">
			<h2>Newsletter</h2>
			<form action="" class="newsletter__form">
				<input type="email" name="newsletter_email" placeholder="e - mail">
				<div class="newsletter__form--cb">
					<input type="checkbox" name="newsletter_emailMe" id="newsletter_emailMe">
					<label for="newsletter_emailMe">Recevoir les newsletters</label>
				</div>

				<input type="submit" value="Valider">
			</form>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
