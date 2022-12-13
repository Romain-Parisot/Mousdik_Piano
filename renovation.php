<?php 
/*
Template Name: Renovation
*/
?>
<?php
get_header();
?>
	<main id="primary" class="site-main">
		<section class="renos">
            <div class="reno">
                <div class="reno__img">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/images/renovation/pendulum.png' ); ?>" alt="">
                </div>
                <h4 class="reno__title">HARMONIQUE</h4>
                <p class="reno__description">
                    Je travaille sur les têtes de marteaux pour optimiser le timbre et les nuances du piano
                </p>
            </div>
            <div class="reno">
                <div class="reno__img">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/images/renovation/mechanism.png' ); ?>" alt="">
                </div>
                <h4 class="reno__title">MÉCANIQUE</h4>
                <p class="reno__description">
                    Je m'occupe de renover votre piano à mon atelier ou à votre domicile
                </p>
            </div>
            <div class="reno">
                <div class="reno__img">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/images/renovation/keyboard.png' ); ?>" alt="">
                </div>
                <h4 class="reno__title">CLAVIER</h4>
                <p class="reno__description">
                    Je me déplace chez vous si besoin
                </p>
            </div>
        </section>
        <button class="reserver">Je souhaite faire rénover mon piano</button>
        <section class="form__container disappear">
            <h2>Faire rénover mon piano</h2>
            <form action="">
                <div class="modelPiano">
                    <label for="ModelPiano">Modèle du piano</label>
                    <input type="text" name="ModelPiano" id="ModelPiano" placeholder="Yamaha GB1 K Black Polished (2012)" required>
                </div>
                <div class="descriptionPb">
                    <label for="descriptionPb">Description du problème / de la rénovation souhaitée</label>
                    <textarea name="descriptionPb" id="descriptionPb" cols="30" rows="10" required></textarea>
                </div>
                <div class="date">
                    <p>Choisir la date du rendez-vous qui vous conviendrais le mieux</p>
                    <div>
                        <select name="" id="date__hours" required>
                            <option value="">Heure</option>
                            <option value="10">10h</option>
                            <option value="11">11h</option>
                            <option value="12">12h</option>
                            <option value="13">13h</option>
                            <option value="14">14h</option>
                            <option value="15">15h</option>
                            <option value="16">16h</option>
                            <option value="17">17h</option>
                            <option value="18">18h</option>
                            <option value="19">19h</option>
                        </select>
                        <select name="" id="date__day" required>
                            <option value="">Jour</option>
                            <option value="01">01</option>
                            <option value="02">02</option>
                            <option value="03">03</option>
                            <option value="04">04</option>
                            <option value="05">05</option>
                            <option value="06">06</option>
                            <option value="07">07</option>
                            <option value="08">08</option>
                            <option value="09">09</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                            <option value="13">13</option>
                            <option value="14">14</option>
                            <option value="15">15</option>
                            <option value="16">16</option>
                            <option value="17">17</option>
                            <option value="18">18</option>
                            <option value="19">19</option>
                            <option value="20">20</option>
                            <option value="21">21</option>
                            <option value="22">22</option>
                            <option value="23">23</option>
                            <option value="24">24</option>
                            <option value="25">25</option>
                            <option value="26">26</option>
                            <option value="27">27</option>
                            <option value="28">28</option>
                            <option value="29">29</option>
                            <option value="30">30</option>
                            <option value="31">31</option>
                        </select>
                        <select name="" id="date__month" required>
                            <option value="">Mois</option>
                            <option value="01">Janvier</option>
                            <option value="02">Février</option>
                            <option value="03">Mars</option>
                            <option value="04">Avril</option>
                            <option value="05">Mai</option>
                            <option value="06">Juin</option>
                            <option value="07">Juillet</option>
                            <option value="08">Août</option>
                            <option value="09">Septembre</option>
                            <option value="10">Octobre</option>
                            <option value="11">Novembre</option>
                            <option value="12">Décembre</option>
                        </select>
                        <input style="display: none;" type="datetime-local" name="" id="date__temoin" required>
                    </div>
                </div>
                <div class="rdvs">
                    <div>
                        <input type="radio" name="rdv" id="rdvHome" required>
                        <label for="rdvHome">Rendez-vous à mon domicile</label>
                    </div>
                    <div>
                        <input type="radio" name="rdv" id="rdvStore">
                        <label for="rdvStore">Rendez-vous à la boutique</label>
                    </div>
                </div>
                <input type="submit" value="Prendre mon rendez-vous">
            </form>
        </section>
        <section class="confirmation disappear">
            <h2>Validation</h2>
            <p>Votre demande de rendez-vous a été validé.</p>
            <p>Halim Mousdik a bien reçu votre demande de réservation ! Il vous contactera très prochainement par e-mail ou par téléphone.</p>

            <div class="circle__container">
                <svg class="circle">
                    <circle cx="50" cy="50" r="40" stroke="black" stroke-width="3" fill="#ffffff"/>
                </svg>
                <svg class="check" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="-3 0 50 45.7" xml:space="preserve">
                    <g>
                        <g>
                            <path fill="none"  stroke="#000000" stroke-width="3" d="M20.687,38.332c-2.072,2.072-5.434,2.072-7.505,0L1.554,26.704c-2.072-2.071-2.072-5.433,0-7.504 c2.071-2.072,5.433-2.072,7.505,0l6.928,6.927c0.523,0.522,1.372,0.522,1.896,0L36.642,7.368c2.071-2.072,5.433-2.072,7.505,0 c0.995,0.995,1.554,2.345,1.554,3.752c0,1.407-0.559,2.757-1.554,3.752L20.687,38.332z"/>
                        </g>
                    </g>
                </svg>
            </div>

            <a href="#">Retour à l'accueil</a>
        </section>
	</main>
    <script src="<?php echo esc_url( get_template_directory_uri() . "/js/valid-form.js" ); ?>"></script>
<?php
get_footer();
