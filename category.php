<?php get_header(); ?>
   
    <section class="populaire populaire__category">
    <h1><?php single_cat_title(); ?></h1>
        <div class="global global__category">
        <?php if (have_posts()) : while (have_posts()) : the_post();   ?>
                <?php get_template_part( 'gabarit/carte' ); ?>
            <?php endwhile; endif; ?>
        </div>
    </section>
    <?php get_footer(); ?>
   
</body>
</html>