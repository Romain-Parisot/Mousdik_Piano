<?php 
/*
Template Name: Where Am I
*/
?>
<?php
get_header();
?>
	<main id="primary" class="site-main">
		<h1>Contactez moi ou passez en boutique</h1>
		<div class="infos">
			<div class="infos_info">
				<div class="info__icon">
					<img src="<?php echo esc_url( get_template_directory_uri() . '/images/whereAmI/phone.png' ); ?>" alt="phone">
				</div>
				<h4 class="info__name">TÉLÉPHONE</h4>
				<p class="info__description">Pour me contacter veuillez m’appeler sur le numéro suivant</p>
				<p class="info__data">06 60 10 92 07</p>
			</div>
			<div class="infos_info">
				<div class="info__icon">
					<img src="<?php echo esc_url( get_template_directory_uri() . '/images/whereAmI/map.png' ); ?>" alt="map">
				</div>
				<h4 class="info__name">ADRESSE</h4>
				<p class="info__description">Vous pourrez trouver mon atelier à cette adresse</p>
				<p class="info__data">16 bis Grande Rue, 91260 Juvisy-sur-Orge</p>
			</div>
			<div class="infos_info">
				<div class="info__icon">
					<img src="<?php echo esc_url( get_template_directory_uri() . '/images/whereAmI/email.png' ); ?>" alt="email">
				</div>
				<h4 class="info__name">EMAIL</h4>
				<p class="info__description">Contactez-moi à cette adresse email</p>
				<p class="info__data">halim.mousdik@gmail.com</p>
			</div>
		</div>
		<section class="map__container">
		<div class="mapouter"><div class="gmap_canvas"><iframe style="height: 100%; width: 100%; border-radius: 0.75rem" id="gmap_canvas" src="https://maps.google.com/maps?q=16%20bis%20Grande%20Rue,%2091260%20Juvisy-sur-Orge&t=&z=17&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://123movies-to.org"></a><br><style>.mapouter{position:relative;text-align:right;height:400px;width:45vw;}</style><style>.gmap_canvas {overflow:hidden;background:none!important;height:100%;width:100%;}</style></div></div>
			<div class="horaires">
				<h3>Horaires d'ouvertures</h3>
				<ul>
					<li>Lundi : Fermé</li>
					<li>Mardi : 10:00 - 19:00</li>
					<li>Mercredi : 10:00 - 19:00</li>
					<li>Jeudi : 10:00 - 19:00</li>
					<li>Vendredi : 10:00 - 19:00</li>
					<li>Samedi : 10:00 - 19:00</li>
					<li>Dimanche : Fermé</li>
				</ul>
			</div>
		</section>
	</main><!-- #main -->
<?php
get_footer();
