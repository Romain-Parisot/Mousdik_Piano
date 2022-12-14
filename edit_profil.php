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
    <div class="popup_block_bg dp_none">

    </div>
    <h3 class="edit_profil_title">Modifier votre profil</h3>
    <!-- popup mail -->
    <div class="main_div_edit_mail main_div_edit dp_none">
        <div class="sec_div_edit">
            <h4>Modifier l'email du compte</h4>
            <span></span>
            <div class="div_edit_input_label">
                <label class="label_popup_edit" for="">Nouvelle adresse email</label>
                <input type="email">
            </div>
            <div class="div_edit_input_label" >
                <label class="label_popup_edit" for="">Valider adresse email</label>
                <input type="email">
            </div>
            
        </div>
        <div class="div_bt_popup_edit_confirm">
            <button class="bt_edit_profil bt_cancel_mail">Annuler</button>
            <button class="bt_edit_profil bg_5575A9 bt_submit_mail">Enregistrer</button>
        </div>
    </div>
    <!-- popup name -->
    <div class="main_div_edit_name main_div_edit dp_none">
        <div class="sec_div_edit">
            <h4>Modifier le nom du compte</h4>
            <span></span>
            <div class="div_edit_input_label">
                <label class="label_popup_edit" for="">Prénom</label>
                <input type="text">
            </div>
            <div class="div_edit_input_label" >
                <label class="label_popup_edit" for="">Nom</label>
                <input type="text">
            </div>
            
        </div>
        <div class="div_bt_popup_edit_confirm">
            <button class="bt_edit_profil bt_cancel_name">Annuler</button>
            <button class="bt_edit_profil bg_5575A9 bt_submit_name">Enregistrer</button>
        </div>
    </div>
    <!-- popup tel -->
    <div class="main_div_edit_tel main_div_edit dp_none">
        <div class="sec_div_edit">
            <h4>Modifier votre numero de téléphone</h4>
            <span></span>
            <div class="div_edit_input_label">
                <label class="label_popup_edit" for="">Numéro de téléphone</label>
                <input type="tel">
            </div>
            <div class="div_edit_input_label" >
                <label class="label_popup_edit" for="">Valider le numéreo</label>
                <input type="tel">
            </div>
            
        </div>
        <div class="div_bt_popup_edit_confirm">
            <button class="bt_edit_profil bt_cancel_tel">Annuler</button>
            <button class="bt_edit_profil bg_5575A9 bt_submit_tel">Enregistrer</button>
        </div>
    </div>
    <!-- popup adresse -->
    <div class="main_div_edit_adresse main_div_edit dp_none">
        <div class="sec_div_edit">
            <h4>Modifier l'adresse du compte</h4>
            <span></span>
            <div class="div_edit_input_label">
                <label class="label_popup_edit" for="">Renseigner votre adresse le plus precisement possible</label>
                <input type="text" placeholder="ex : 16 bis Grande Rue, 91260, Juvisy-sur-Orge">
            </div>
        </div>
        <div class="div_bt_popup_edit_confirm">
            <button class="bt_edit_profil bt_cancel_adresse">Annuler</button>
            <button class="bt_edit_profil bg_5575A9 bt_submit_adresse">Enregistrer</button>
        </div>
    </div>
    <!-- popup mdp -->
    <div class="main_div_edit_mdp main_div_edit dp_none">
        <div class="sec_div_edit">
            <h4>Modifier votre mot de passe</h4>
            <span></span>
            <div class="div_edit_input_label">
                <label class="label_popup_edit" for="">Nouveaux mot de passe</label>
                <input type="password">
            </div>
            <div class="div_edit_input_label" >
                <label class="label_popup_edit" for="">Valider le mot de passe</label>
                <input type="password" >
            </div>
            
        </div>
        <div class="div_bt_popup_edit_confirm">
            <button class="bt_edit_profil bt_cancel_mdp">Annuler</button>
            <button class="bt_edit_profil bg_5575A9 bt_submit_mdp">Enregistrer</button>
        </div>
    </div>
    <!-- no popup -->
    <div class="edit_div_main">
        <div class="div_edit_profil">
            <div class="div_name_profile_edit">
                <p class="name_profile_edit">Nom du compte</p>
            </div>
            <p class="txt_data_profil">Lorem ipsum aaaaaaaaaaa</p>
            <button class="bt_edit_profil bt_edit_name"  id="bt_edit_name">Changer</button>
        </div>
        <div class="div_edit_profil">
            <div class="div_name_profile_edit">
                <p class="name_profile_edit">Adresse email</p>
            </div>
            <div  class="txt_data_profil">
                <p>Lorem ipsum aaaaaaaaaaa</p>
            </div>
            <button class="bt_edit_profil"  id="bt_edit_mail">Changer</button>
        </div>
        <div class="div_edit_profil">
            <div class="div_name_profile_edit">
                <p class="name_profile_edit">Téléphone portable</p>
            </div>
            <p class="txt_data_profil">Lorem ipsum aaaaaaaaaaa</p>
            <button class="bt_edit_profil" id="bt_edit_tel">Changer</button>
        </div>
        <div class="div_edit_profil">
            <div class="div_name_profile_edit">
                <p class="name_profile_edit">Mot de passe</p>
            </div>
            <p class="txt_data_profil">Lorem ipsum aaaaaaaaaaa</p>
            <button class="bt_edit_profil" id="bt_edit_mdp">Changer</button>
        </div>
        <div class="div_edit_profil">
            <div class="div_name_profile_edit">
                <p class="name_profile_edit">Adresse</p>
            </div>
            <p class="txt_data_profil">Lorem ipsum aaaaaaaaaaa</p>
            <button class="bt_edit_profil" id="bt_edit_adresse">Changer</button>
        </div>
    </div>
    <div>
        <p><a class="edit_profil_deconnect" href="#">Se déconnecter</a></p>
    </div>
</div>





<script src=" <?php echo get_template_directory_uri() . '\js\popup_edit_profil.js' ?>"></script> 
