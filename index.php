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

                    <option value="tous" class="tab tab-tous tab-active">Tous</option>

                    <?php 
                    // Get taxonomies' name
                        $args=array(
                            'public'   => true,
                            '_builtin' => false
                        );
                        $taxonomies = get_taxonomies($args,'names','and'); 
                    
                        $terms = get_terms([
                            'taxonomy' => $taxonomies,
                            'hide_empty' => false,
                        ]);

                        foreach ($terms as $term){
                            ?>
                            <option value="<?= $term->slug ?>" class="tab tab-<?= $term->slug ?>"><?= $term->name ?></option>
                            <?php
                        }
                    ?>

                    </select>
                </div>
                
            </div>

            <div class="pianos">
            <?php
            if ( have_posts() ) :
            ?>
                <div class="articles-list">
                    <?php
                    /* Start the Loop */
                    while ( have_posts() ) :
                        the_post();

                        $prix = get_field('prix');
                    ?>

                    <?php
                        $taxo = get_the_terms(get_the_ID(), 'thetype');
                        if($taxo) :
                            foreach($taxo as $category) :
                    ?>

                        <div class="article-card <?= $category->slug ?>">
                            <a href="<?php the_permalink(); ?>">
                                <div class="img">
                                    <?php the_post_thumbnail('full') ?>
                                </div>
                                <div class="text">
                                    <h2>
                                        <?php
                                            the_title(); ?>
                                                - <?= $category->name ?>
                                        <?php
                                            endforeach;
                                            endif;
                                        ?>
                                    </h2>
                                    <p>
                                        <?= $prix; ?> €
                                    </p>
                                </div>
                            </a>
                            
                        </div>
                    
                    <?php
                    endwhile; 
                    ?>
                </div>

                <?php the_posts_navigation();

            else :

                get_template_part( 'template-parts/content', 'none' );

            endif;
            ?>
            
            </div>

        </div>
        

	</main>

            <script>
                console.log("1")

                document.querySelector('select').addEventListener('input', (e) => {
                    console.log(e.target.value)
                    document.querySelectorAll('.article-card').forEach(card => {
                        card.classList.add('hide')
                    })
                    if(!(e.target.value === 'tous')) {
                        document.querySelectorAll(`.article-card.${e.target.value}`).forEach(card => {
                            card.classList.remove('hide')
                        })
                    } else {
                        document.querySelectorAll(`.article-card`).forEach(card => {
                            card.classList.remove('hide')
                        })
                    }
                })

            </script>
<?php
get_footer();
