<?php session_start(); ?>
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
<?php
require_once 'Connection.php';
$connection = new Connection();

if($_POST) {
    if(isset($_POST['form'])) {
        switch($_POST['form']){
            case 'names':
                if(!(isset($_POST['first_name']) && isset($_POST['last_name']))) break;
                if(!($_POST['first_name'] !== '' && $_POST['last_name'] !== '')) break;
                $connection->insert_names($_POST['first_name'], $_POST['last_name']);
                break;
            case 'email':
                if(!(isset($_POST['mail']) && isset($_POST['mail2']))) break;
                if(!($_POST['mail'] !== '' && $_POST['mail2'] !== '')) break;
                if(!($_POST['mail'] === $_POST['mail2'])) break;
                if(!filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL)) break;
                $connection->insert_mail($_POST['mail']);
                break;
            case 'phone':
                if(!(isset($_POST['tel']) && isset($_POST['tel2']))) break;
                if(!($_POST['tel'] === $_POST['tel2'])) break;
                $connection->insert_phone($_POST['tel']);
                break;
            case 'adress':
                if(!isset($_POST['adress'])) break;
                if($_POST['adress'] === '') break;
                $connection->insert_adress($_POST['adress']);
                break;
            case 'password':
                if(!(isset($_POST['mdp']) && isset($_POST['mdp2']))) break;
                if(!($_POST['mdp'] === $_POST['mdp'])) break;
                $connection->insert_mdp($_POST['mdp']);
                break;
        }
    }
}
$user = $connection->getUserById($_SESSION['user_id']);
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
        <form method="post">
            <input type="hidden" name="form" value="email">
            <div class="sec_div_edit">
                <h4>Modifier l'email du compte</h4>
                <span></span>
                <div class="div_edit_input_label">
                    <label class="label_popup_edit" for="">Nouvelle adresse email</label>
                    <input type="email" name="mail" >
                </div>
                <div class="div_edit_input_label" >
                    <label class="label_popup_edit" for="">Valider adresse email</label>
                    <input type="email" name="mail2" >
                </div>
                
            </div>
            <div class="div_bt_popup_edit_confirm">
                <button class="bt_edit_profil bt_cancel_mail">Annuler</button>
                <input value="Enregistrer" type="submit" name="valid_mail" class="bt_edit_profil bg_5575A9 bt_submit_mail"></input>
            </div>
        </form>
    </div>
    <!-- popup name -->
    <div class="main_div_edit_name main_div_edit dp_none">
        <form method="post">
            <input type="hidden" name="form" value="names">
            <div class="sec_div_edit">
                <h4>Modifier le nom du compte</h4>
                <span></span>
                <div class="div_edit_input_label">
                    <label class="label_popup_edit" for="">Prénom</label>
                    <input type="text" name="first_name" value="<?= $user['first_name'] ?>">
                </div>
                <div class="div_edit_input_label" >
                    <label class="label_popup_edit" for="">Nom</label>
                    <input type="text" name="last_name" value="<?= $user['last_name'] ?>" >
                </div>
                
            </div>
            <div class="div_bt_popup_edit_confirm">
                <button class="bt_edit_profil bt_cancel_name">Annuler</button>
                <input value="Enregistrer" type="submit" name="valid_name" class="bt_edit_profil bg_5575A9 bt_submit_name"></input>
            </div>
        </form>
    </div>
    <!-- popup tel -->
    <div class="main_div_edit_tel main_div_edit dp_none">
        <form method="post">
            <input type="hidden" name="form" value="phone">
            <div class="sec_div_edit">
                <h4>Modifier votre numero de téléphone</h4>
                <span></span>
                <div class="div_edit_input_label">
                    <label class="label_popup_edit" for="">Numéro de téléphone</label>
                    <input type="tel" name="tel" >
                </div>
                <div class="div_edit_input_label" >
                    <label class="label_popup_edit" for="">Valider le numéreo</label>
                    <input type="tel" name="tel2" >
                </div>
                
            </div>
            <div class="div_bt_popup_edit_confirm">
                <button class="bt_edit_profil bt_cancel_tel">Annuler</button>
                <input value="Enregistrer" type="submit" name="valid_tel" class="bt_edit_profil bg_5575A9 bt_submit_tel"></input>
            </div>
        </form>
    </div>
    <!-- popup adresse -->
    <div class="main_div_edit_adresse main_div_edit dp_none">
        <form method="post">
            <input type="hidden" name="form" value="adress">
            <div class="sec_div_edit">
                <h4>Modifier l'adresse du compte</h4>
                <span></span>
                <div class="div_edit_input_label">
                    <label class="label_popup_edit" for="">Renseigner votre adresse le plus precisement possible</label>
                    <input type="text"  name="adress" placeholder="ex : 16 bis Grande Rue, 91260, Juvisy-sur-Orge">
                </div>
            </div>
            <div class="div_bt_popup_edit_confirm">
                <button class="bt_edit_profil bt_cancel_adresse">Annuler</button>
                <input value="Enregistrer" type="submit" name="valid_adresse" class="bt_edit_profil bg_5575A9 bt_submit_adresse"></input>
            </div>
        </form>
    </div>
    <!-- popup mdp -->
    <div class="main_div_edit_mdp main_div_edit dp_none">
    <form method="post">
            <input type="hidden" name="form" value="password">
            <div class="sec_div_edit">
                <h4>Modifier votre mot de passe</h4>
                <span></span>
                <div class="div_edit_input_label">
                    <label class="label_popup_edit" for="">Nouveaux mot de passe</label>
                    <input type="password" name="mdp" >
                </div>
                <div class="div_edit_input_label" >
                    <label class="label_popup_edit" for="">Valider le mot de passe</label>
                    <input type="password" name="mdp2" >
                </div>
                
            </div>
            <div class="div_bt_popup_edit_confirm">
                <button class="bt_edit_profil bt_cancel_mdp">Annuler</button>
                <input value="Enregistrer" type="submit" name="valid_mdp" class="bt_edit_profil bg_5575A9 bt_submit_mdp"></input>
            </div>
        </form>
    </div>
    <!-- no popup -->
    <div class="edit_div_main">
        <div class="div_edit_profil">
            <div class="div_name_profile_edit">
                <p class="name_profile_edit">Nom du compte</p>
            </div>
            <p class="txt_data_profil"><?= $user['first_name'] ?> <?= $user['last_name'] ?></p>
            <button class="bt_edit_profil bt_edit_name"  id="bt_edit_name">Changer</button>
        </div>
        <div class="div_edit_profil">
            <div class="div_name_profile_edit">
                <p class="name_profile_edit">Adresse email</p>
            </div>
            <div  class="txt_data_profil">
                <p><?= $user['mail'] ?></p>
            </div>
            <button class="bt_edit_profil"  id="bt_edit_mail">Changer</button>
        </div>
        <div class="div_edit_profil">
            <div class="div_name_profile_edit">
                <p class="name_profile_edit">Téléphone portable</p>
            </div>
            <p class="txt_data_profil"><?= $user['telephone'] ?></p>
            <button class="bt_edit_profil" id="bt_edit_tel">Changer</button>
        </div>
        <div class="div_edit_profil">
            <div class="div_name_profile_edit">
                <p class="name_profile_edit">Mot de passe</p>
            </div>
            <p class="txt_data_profil"></p>
            <button class="bt_edit_profil" id="bt_edit_mdp">Changer</button>
        </div>
        <div class="div_edit_profil">
            <div class="div_name_profile_edit">
                <p class="name_profile_edit">Adresse</p>
            </div>
            <p class="txt_data_profil"><?= $user['adresse'] ?></p>
            <button class="bt_edit_profil" id="bt_edit_adresse">Changer</button>
        </div>
    </div>
    <div>
        <p><a class="edit_profil_deconnect" href="#">Se déconnecter</a></p>
    </div>
</div>

<script src=" <?php echo get_template_directory_uri() . '\js\popup_edit_profil.js' ?>"></script> 


<?php
require_once 'Check.php';
require_once 'Connection.php';

// ---------------get data mail------------
if(isset($_POST['valid_mail'])){
    $data_mail = new Check(
        $_POST['mail'],
        $_POST['mail2'],        
    );
}
// ---------------get data tel------------
elseif(isset($_POST['valid_tel'])){
    $data_tel = new Check(
        $_POST['tel'],
        $_POST['tel2'],        
    );
}
// ---------------get data mdp------------
elseif(isset($_POST['valid_mdp'])){
    $data_mdp = new Check(
        $_POST['mdp'],
        $_POST['mdp2'],        
    );
}
// ---------------get data name------------
elseif(isset($_POST['valid_name'])){
    $data_name = new Check(
        $_POST['name'],
        $_POST['name2'],        
    );
}
// ---------------get data adresse------------
elseif(isset($_POST['valid_adresse'])){
    $data_adresse = new Check(
        $_POST['adresse'],
    );
}

// ---------------insert data mail------------
    if($data_mail->samedata()){
        $connection = new Connection();
        $data_mail=$data_mail[0];
        $result = $connection->insert_mail($data_mail);
        if ($result){
            echo 'Nous avons bien modifier votre mail.';
        }
        else{
            echo 'Database error';
        }
    }
    else{
        echo 'Vos deux champs ne sont pas identique  ou sont vide';
    }
// ---------------insert data tel------------
    if($data_tel->samedata()){
        $connection = new Connection();
        $data_tel=$data_tel[0];
        $result = $connection->insert_tel($data_tel);
        if ($result){
            echo 'Nous avons bien modifier votre numero de téléphone';
        }
        else{
            echo 'Database error';
        }
    }
    else{
        echo 'Vos deux champs ne sont pas identique  ou sont vide';
    }
// ---------------insert data mdp------------
if($data_mdp->samedata()){
    $connection = new Connection();
    $data_mdp=$data_mdp[0];
    $result = $connection->insert_mdp($data_mdp);
    if ($result){
        echo 'Nous avons bien modifier votre mot de passe';
    }
    else{
        echo 'Database error';
    }
}
else{
    echo 'Vos deux champs ne sont pas identique ou sont vide';
}
// ------------insert data name--------------
if($data_name->notnull()){
    $connection = new Connection();
    $fist_name=$data_name[1];
    $last_name=$data_name[0];
    $result = $connection->insert_name($fist_name, $last_name);
    if ($result){
        echo 'Nous avons bien modifier vos nom et prenom';
    }
    else{
        echo 'Database error';
    }
}
else{
    echo 'Vos deux champs sont vide';
}
// --------------insert data adresse----------------
if($data_adresse->notnullsingle()){
    $connection = new Connection();
    $result = $connection->insert_adresse($data_adresse);
    if ($result){
        echo 'Nous avons bien modifier votre adresse';
    }
    else{
        echo 'Database error';
    }
}
else{
    echo 'Votre champ est vide';
}
?>