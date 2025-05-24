<?php
/**
 * Template-part hero
 */
?>

<?php 
$hero_auteur = get_theme_mod('hero_auteur', 'Default Title');
$hero_grandeur_carrousel = get_theme_mod('hero_grandeur_carrousel', 1);
?>

<section class="hero">
    <div class="hero__button">
    <?php for ($index = 0; $index < $hero_grandeur_carrousel; $index++): ?>
     
        <input id="" type="radio" data-id_radio="<?= $index ?>" class="hero__radio__input" name="carrousel">
    <?php endfor; ?>
    </div>
    <?php 
    for ($index = 1; $index <= $hero_grandeur_carrousel; $index++):
        $hero_background = get_theme_mod("hero_background_$index", '');
    ?>
        <div class="hero__carrousel<?= $index == 1 ? ' active' : '' ?>" style="background-image: url('<?= esc_url($hero_background) ?>');"></div>
    <?php endfor; ?>
</section>

    <div class="hero__contenu global" style="color : <?= $hero_icone; ?>">
        <h1 class="hero__titre"><?php bloginfo('name'); ?></h1>
        <p class="hero__description"><?php bloginfo('description'); ?></p>
        <p class="hero__courriel"><?php bloginfo('admin_email'); ?></p>
        <p class="hero__adresse">5800 Sherbrooke-est - Montréal (Québec) H1X 2A2</p>
        <p class="hero__auteur">Auteur : <?= $hero_auteur ?></p>
        <div class="hero__inscrire">
            s'inscrire
        </div>
        <?php get_template_part('gabarit/icone'); ?>
    </div>
</section>