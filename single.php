<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package mousdik
 */

$prix = get_field('prix');
$marque = get_field('marque');
$model = get_field('model');
$origine = get_field('origine');
$num = get_field('numero_de_serie');
$annee = get_field('annee');
$longueur = get_field('longueur');
$structure = get_field('structure');
$mecanique = get_field('mecanique');
$nombre_de_touches = get_field('nombre_de_touches');
$nombre_de_pedales = get_field('nombre_de_pedales');
$finition = get_field('finition');


function get_attached_images() {
	global $post;
	$post_id = $post->ID;
	$media = get_attached_media( 'image', $post_id );
	}

get_header();
?>

	<main id="primary" class="site-main">

		<section class="lepiano">

			<div class="imagespiano">
				<div class="lpimg1">
					<?php the_post_thumbnail(); ?>
					<?php the_post_thumbnail(); ?>
					<?php the_post_thumbnail(); ?>
					<?php the_post_thumbnail(); ?>
					<?php get_attached_images(); ?>
				</div>
				<div class="lpimg2">
					<?php the_post_thumbnail(); ?>
				</div>
			</div>

			<div class="infos">
				<h1><?php the_title(); ?></h1>
				
				<p class="typepiano">
				<?php
                                        $taxo = get_the_terms(get_the_ID(), 'thetype');
                                        if($taxo) :
                                            foreach($taxo as $category) : ?>
                                            <?= $category->name ?>
                                        <?php endforeach;
                                        endif; ?>	
										</p>
				
				<h2 class="theprix"><?= $prix ?></h2>

				<div class="thecara">
					<h3>Caractéristiques</h3>
					<li>Marque : <?= $marque; ?></li>
					<li>Modèle : <?= $model; ?></li>
					<li>Origine : <?= $origine; ?></li>
				</div>
				
				<div class="lienvoir">
					<a href="#cara">Voir tout</a>
				</div>

				<div class="cli">
					<button>Réserver</button>
					<img src="<?php echo esc_url( get_template_directory_uri() . '/images/logo_heart.png' ); ?>" alt="icone heart" class="logo_top_droit_header"> 
				</div>
			</div>
			
		</section>

		<section class="descrip">
			<h2>Description du <?php the_title(); ?></h2>
			<?php the_content(); ?>
		</section>

		<section id="cara" class="caract">
			<h2>Caractéristiques du <?php the_title(); ?></h2>
			<div class="lescaracts">
				<li>Marque : <?= $marque; ?></li>
				<li>Modèle : <?= $model; ?></li>
				<li>Origine : <?= $origine; ?></li>
				<li>Numéro de série : <?= $num; ?></li>
				<li>Année : <?= $annee; ?></li>
				<li>Longueur : <?= $longueur; ?> cm</li>
				<li>Structure : <?= $structure; ?></li>
				<li>Mécanique : <?= $mecanique; ?></li>
				<li>Nombre de touches : <?= $nombre_de_touches; ?></li>
				<li>Nombre de pédale : <?= $nombre_de_pedales; ?></li>
				<li>Finition : <?= $finition; ?></li>
			</div>
		</section>
	</main><!-- #main -->

<?php
get_footer();
