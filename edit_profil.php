<?php 
/*
Template Name: Edit Profil
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


<div class="bg_edit_profil">
    <h3 class="edit_profil_title">Modifier votre profil</h3>
    <div class="edit_div_main">
        <div class="div_edit_profil">
            <p class="name_profile_edit">Nom du compte</p>
            <p><?php  ?></p>
            <button class="bt_edit_profil">Changer</button>
        </div>
        <div class="div_edit_profil">
            <p class="name_profile_edit">Adresse email</p>
            <p><?php  ?></p>
            <button class="bt_edit_profil">Changer</button>
        </div>
        <div class="div_edit_profil">
            <p class="name_profile_edit">Téléphone portable</p>
            <p><?php  ?></p>
            <button class="bt_edit_profil">Changer</button>
        </div>
        <div class="div_edit_profil">
            <p class="name_profile_edit">Mot de passe</p>
            <p><?php  ?></p>
            <button class="bt_edit_profil">Changer</button>
        </div>
        <div class="div_edit_profil">
            <p class="name_profile_edit">Adresse</p>
            <p><?php  ?></p>
            <button class="bt_edit_profil">Changer</button>
        </div>
    </div>
    <div>
        <p><a class="edit_profil_deconnect" href="#">Se déconnecter</a></p>
    </div>
</div>
