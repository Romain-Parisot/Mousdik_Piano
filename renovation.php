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
        <section class="form__container">
            <h2>Faire rénover mon piano</h2>
            <form action="">
                <div class="modelPiano">
                    <label for="ModelPiano">Modèle du piano</label>
                    <input type="text" name="ModelPiano" id="ModelPiano" required>
                </div>
                <div class="yearPiano">
                    <label for="yearPiano">Année du piano</label>
                    <input type="text" name="yearPiano" id="yearPiano" required>
                </div>
                <div class="descriptionPb">
                    <label for="descriptionPb">Description du problème / de la rénovation souhaitée</label>
                    <textarea name="descriptionPb" id="descriptionPb" cols="30" rows="10" required></textarea>
                </div>
                <div class="date">
                    <p>Choisir la date du rendez-vous qui vous conviendrais le mieux</p>
                    <div>
                        <select name="" id="" required>
                            <option value="">Heure</option>
                            <option value="">10h</option>
                            <option value="">11h</option>
                            <option value="">12h</option>
                            <option value="">13h</option>
                            <option value="">14h</option>
                            <option value="">15h</option>
                            <option value="">16h</option>
                            <option value="">17h</option>
                            <option value="">18h</option>
                            <option value="">19h</option>
                        </select>
                        <select name="" id="" required>
                            <option value="">Jour</option>
                            <option value="">01</option>
                            <option value="">02</option>
                            <option value="">03</option>
                            <option value="">04</option>
                            <option value="">05</option>
                            <option value="">06</option>
                            <option value="">07</option>
                            <option value="">08</option>
                            <option value="">09</option>
                            <option value="">10</option>
                            <option value="">11</option>
                            <option value="">12</option>
                            <option value="">13</option>
                            <option value="">14</option>
                            <option value="">15</option>
                            <option value="">16</option>
                            <option value="">17</option>
                            <option value="">18</option>
                            <option value="">19</option>
                            <option value="">20</option>
                            <option value="">21</option>
                            <option value="">22</option>
                            <option value="">23</option>
                            <option value="">24</option>
                            <option value="">25</option>
                            <option value="">26</option>
                            <option value="">27</option>
                            <option value="">28</option>
                            <option value="">29</option>
                            <option value="">30</option>
                            <option value="">31</option>
                        </select>
                        <select name="" id="" required>
                            <option value="">Mois</option>
                            <option value="">Janvier</option>
                            <option value="">Février</option>
                            <option value="">Mars</option>
                            <option value="">Avril</option>
                            <option value="">Mai</option>
                            <option value="">Juin</option>
                            <option value="">Juillet</option>
                            <option value="">Août</option>
                            <option value="">Septembre</option>
                            <option value="">Octobre</option>
                            <option value="">Novembre</option>
                            <option value="">Décembre</option>
                        </select>
                        <input type="datetime-local" name="" id="">
                    </div>
                </div>
                <div class="rdvs">
                    <div>
                        <input type="radio" name="ModelPiano" id="ModelPiano">
                        <label for="ModelPiano">Rendez-vous à mon domicile</label>
                    </div>
                    <div>
                        <input type="radio" name="ModelPiano" id="ModelPiano">
                        <label for="ModelPiano">Rendez-vous à la boutique</label>
                    </div>
                </div>
                <input type="submit" value="Prendre mon rendez-vous">
            </form>
        </section>
	</main>
    <script src="<?php echo esc_url( get_template_directory_uri() . './js/renovation/valid-form.js' ); ?>"></script>
<?php
get_footer();
