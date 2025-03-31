<?php get_header(); 
 $hero_erreur = get_theme_mod('hero_erreur', '');?>

    <h1>-------- 404---------</h1>
    <section class="hero" style="background-image: url(<?= $hero_erreur?>);">
        <h1>page non trouvé</h1>
        <figure class="entete__logo">
                 <?php if (function_exists('the_custom_logo')) {
                the_custom_logo();
            } ?>
        <?php get_search_form(); ?>
    </section>

    <?php get_footer(); ?>
   
</body>
</html>