<?php get_header() ?>

<section class="hero">

        <div class="hero__contenu global">
            <h1 class="hero__titre"><?php bloginfo( 'name' ); ?></h1>
            <p class="hero__description">

               <?php bloginfo( 'description' ); ?>           </p>
            <p class="hero__courriel">
            <?php bloginfo( 'admin_email' ); ?>
            </p>
            <p class="hero__adresse">
                5800 Sherbrooke-est - Montréal (Québec) H1X 2A2
            </p>
            <div class="hero__inscrire" >
                s'inscrire
                
            </div>
            <div class="hero__icone">
                <img src="https://s2.svgbox.net/social.svg?ic=facebook&color=000000" width="20" height="20">
                <img src="https://s2.svgbox.net/social.svg?ic=linkedin&color=000000" width="20" height="20">
                <img src="https://s2.svgbox.net/social.svg?ic=stackoverflow&color=000000" width="20" height="20">
                <img src="https://s2.svgbox.net/social.svg?ic=snapchat&color=000000" width="20" height="20">
            </div>
        </div>

    </section>
    <main>
        <div class="galerie__inscription">
            <div class="galerie__composition">
            <div class="galerie__detail" >
                <h3>
                    nom
                </h3>
               <form class="galerie__form">
                <input type="search" placeholder="ecrivez votre nom" class="galerie__input">
               </form>
            </div>
            <div class="galerie__detail" >
                <h3>
                    prenom
                </h3>
               <form class="galerie__form">
                <input type="search" placeholder="ecrivez votre prenom" class="galerie__input">
               </form>
            </div>
            <div class="galerie__detail" >
                <h3>
                    courriel
                </h3>
               <form class="galerie__form">
                <input type="search" placeholder="ecrivez votre courriel" class="galerie__input">
               </form>
            </div>
            <div class="galerie__detail" >
                <h3>
                   telphone
                </h3>
               <form class="galerie__form ">
                <input type="search" placeholder="ecrire telphone" class="galerie__input">
               </form>
            </div>
            <div class="galerie__detail" >
             <button class="galerie__form galerie__button">s'inscrire</button>
            </div>
        </div>
        </div>
        <!-- <div class="galerie global"> -->
        <section class="populaire">
        <div class="global populaire__carte">
            <?php if (have_posts()) : while (have_posts()) : the_post(); 
            if (in_category("galerie"))  {
                the_content() ;
            } else {    ?>
                <?php get_template_part( 'gabarit/carte' ); ?>
            <?php } ?>
            <?php endwhile; endif; ?>
        </div>
    </section>

    </main>
    <footer></footer>
    <?php get_footer() ?>
</body>
</html>