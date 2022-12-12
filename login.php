<?php 
/* 
Template Name: Login 
*/
?>
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


<div class="bg-login">
    <div>
        <form>
            <div class="div_form_log_creacc">
                <h3 class="font_30px">Créer un compte</h3>
                <div class="div_name_form_log_creacc">
                    <div class="input_log_creacc_form">
                        <label for="" class="semi_bold">Nom</label>
                        <input type="text">
                    </div>
                    <div class="input_log_creacc_form">
                        <label for="" class="semi_bold">Prenom</label>
                        <input type="text">
                    </div>
                </div>
                <div class="input_log_creacc_form">
                    <label for="" class="semi_bold">Email</label>
                    <input type="text">
                </div>
                <div class="input_log_creacc_form">
                    <label for="" class="semi_bold">Mot de passe</label>
                    <input type="password">
                </div>
                <div class="input_log_creacc_form">
                    <label for="" class="semi_bold">Confirmer mot de passe</label>
                    <input type="password">
                </div>
                <input type="submit" value="Connexion">
                <p>Pas de compte chez nous ? <a href="#" class="bold">Se connecter</a></p>
            </div>
        </form>
    </div>
    <div>
        <img src="" alt="">
    </div>
    
</div>