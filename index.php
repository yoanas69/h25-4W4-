<section class="populaire">
        <div class="global">
            <?php if (have_posts()) : while (have_posts()) : the_post(); 
            if (in_category("galerie")) {
                the_content();
            } else {?>
            <article>
                <h2><?php the_title(); ?></h2>
                <div><?php echo wp_trim_words(get_the_content(),10, " ... " ); ?></div>
            </article>
            <?php } ?>
            <?php endwhile; endif; ?>
        </div>
    </section>
    <footer></footer>
    
    <?php wp_footer() ?>
</body>
</html>