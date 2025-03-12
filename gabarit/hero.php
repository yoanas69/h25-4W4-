<?php
/**
 * Template-part hero
 */
?>
<?php $hero_auteur = get_theme_mod('hero_auteur', 'Default Title');
      $hero_background = get_theme_mod('hero_background', ''); ?>
<section class="hero" style="background-image: url(<?= $hero_background ?>);">

        <div class="hero__contenu global" style="color : <?= $hero_icone; ?>">
            <h1 class="hero__titre"><?php bloginfo( 'name' ); ?></h1>
            <p class="hero__description">

               <?php bloginfo( 'description' ); ?>           </p>
            <p class="hero__courriel">
            <?php bloginfo( 'admin_email' ); ?>
            </p>
            <p class="hero__adresse">
                5800 Sherbrooke-est - Montréal (Québec) H1X 2A2
            </p>
            <p class="hero_ _auteur"> Auteur :<?= $hero_auteur ?></p>
            <div class="hero__inscrire" >
                s'inscrire
                
            </div>
            <?php get_template_part( 'gabarit/icone' ); ?>
        </div>

    </section>