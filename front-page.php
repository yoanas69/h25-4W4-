<?php get_header() ?>
<?php get_template_part( 'gabarit/hero' ); ?>
    <main>
    <?php get_template_part( 'gabarit/formulaire' ); ?>
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