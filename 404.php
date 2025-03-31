<?php get_header(); 
 $hero_erreur = get_theme_mod('hero_erreur', '');
 $titre_erreur = get_theme_mod('erreur_titre', '');
 $erreur_desc = get_theme_mod('erreur_desc', '');
 $color = get_theme_mod('hero_couleur', '#eeee22');
 $page_acceuil =  home_url();
 ?>
    <section class="hero section_404" style="background-image: url(<?= $hero_erreur?>);">
        <h1 style = " color :<?= $color?> "> <?= $titre_erreur ?></h1>
        <p style = " color :<?= $color?> "> <?= $erreur_desc ?></p>
        <button class="button_404" >
            <a href="<?= $page_acceuil?>">
                retourner à l'acceuil
            </a>
        </button>
    
        <?php wp_nav_menu(array(
                    "menu" => "404",
                    "container" => "nav",
                )); ?>
    

    </section>

    <?php get_footer(); ?>
   
</body>
</html>