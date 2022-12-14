<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package mousdik
 */

$prix = get_field('prix');

get_header();
?>

	<main id="primary">
   
        <div class="nospiano">

            <div class="nospianos">

                <div class="presta revise">
                    <div class="prez-img1">
                        <div class="pres-img">
                            <img src="<?php echo esc_url(get_template_directory_uri() . "/images/posts_piano/logo_search.png")?>">
                        </div>
                    </div>
                    <div class="piano-text">
                        <h3>Révisé</h3>
                        <p>Tous nos pianos d’occasions sont accordés et révisés par nous.</p>
                    </div>
                </div>

                <div class="presta livre">
                    <div class="prez-img1">
                        <div class="pres-img">
                            <img src="<?php echo esc_url(get_template_directory_uri() . "/images/posts_piano/logo_colis.png")?>">
                        </div>
                    </div>
                    <div class="piano-text">
                        <h3>Livré chez vous</h3>
                        <p>Le piano sera livré chez vous si vous le désirez.</p>
                    </div>
                </div>

                <div class="presta garantie">
                    <div class="prez-img1">
                        <div class="pres-img">
                            <img src="<?php echo esc_url(get_template_directory_uri() . "/images/posts_piano/logo_secure.png")?>">
                        </div>
                    </div>
                    <div class="piano-text">
                        <h3>Garantie 3 ans</h3>
                        <p>Garantie de 3 ans sur votre piano</p>
                    </div>
                </div>
            </div>

        </div>

        <div class="mini-menu">
            Pianos
        </div>
        

        <div class="bas">

            <div class="filtre">
                <div class="search">
                    <img src="<?php echo esc_url(get_template_directory_uri() . "/images/posts_piano/logo_recherche.png")?>">
                    <input type="text" name="" id="" placeholder="Rechercher...">
                </div>

                <div class="select">
                    <select name="type" id="type">
                        <option value="carre">Carré</option>
                        <option value="droit">Droit</option>
                        <option value="queue">Queue</option>
                        <option value="demiqueue">Demi-queue</option>
                    </select>
                </div>
                
            </div>

            <div class="pianos">
        <?php
            if ( have_posts() ) :
                ?>
                <main class="articles-list">
                    <?php
                    /* Start the Loop */
                    while ( have_posts() ) :
                        the_post(); ?>
                    <a href="<?php the_permalink(); ?>">
                        <div class="article-card">
                            <div class="img">
                                <?php the_post_thumbnail('full') ?>
                            </div>

                            <div class="text">
                                <h2>
                                    <?php the_title();
                                        $taxo = get_the_terms(get_the_ID(), 'thetype');
                                        if($taxo) :
                                            foreach($taxo as $category) : ?>
                                            - <?= $category->name ?>
                                        <?php endforeach;
                                        endif; ?>
                                </h2>
                                <p>
                                    <?= $prix; ?>
                                </p>
                            </div>
                            
                        </div>
                    </a>
                    <?php
                    endwhile; 
                    ?>
                </main>

                <?php the_posts_navigation();

            else :

                get_template_part( 'template-parts/content', 'none' );

            endif;
            ?>
            
            </div>

        </div>
        

	</main>
	
<?php
get_footer();
