<?php
/**
 * Modèle pour les résultats de recherche
 */
get_header();
?>
<body class="search_body">
    

<main class="site__main search_main">
    <section class="recherche__section search_section">
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <article class="search_article">
                    <h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                    <p><?php echo wp_trim_words(get_the_excerpt(), 60); ?></p>
                    <hr>
                </article>
            <?php endwhile; ?>
        <?php else : ?>
            <p>Aucun résultat trouvé.</p>
        <?php endif; ?>
    </section>
</main>
</body>
<?php get_footer(); ?>