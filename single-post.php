<?php get_header(); ?>
    <section class="populaire post__section">
        <div class="global">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <article class="singlepost_article">
            <?php 
            ?>
                <h2><?php the_title(); ?></h2>
                <div><?php the_content() ?>
                <?php the_category(); ?>
               
                <p class="carte__temperature"> Température maximum : <?php the_field('temperature_maximum'); ?> °C</p>
                <p class="carte__temperature"> Température moyene : <?php the_field('temperature_moyene'); ?> °C</p>
                <p class="carte__temperature"> Température minimum : <?php the_field('temperature_minimum'); ?> °C</p>
            <?php endwhile; endif; ?>
        </div>
    </section>
    <?php get_footer(); ?>
   
</body>
</html>