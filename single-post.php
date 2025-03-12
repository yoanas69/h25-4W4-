<?php get_header(); ?>
    <section class="populaire">
        <div class="global">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <article>
            <?php 
            if(has_post_thumbnail()){
            the_post_thumbnail('large');} 
            ?>
                <h2><?php the_title(); ?></h2>
                <div><?php the_content() ?>
                <p> Température maximum : <?php the_field('temperature_maximum'); ?></p>
                <p> Température moyene : <?php the_field('temperature_moyene'); ?></p>
                <p> Température minimum : <?php the_field('temperature_minimum'); ?></p>
            <?php endwhile; endif; ?>
        </div>
    </section>
    <?php get_footer(); ?>
   
</body>
</html>