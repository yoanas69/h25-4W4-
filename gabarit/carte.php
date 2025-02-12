<?php
/*template part*/
?>
<article class="carte carte--grande">
<figure class="carte__image">
    <img src="" alt="">
</figure>
<div class="carte__contenu">
    <h2 class="carte__titre"><?php the_title(); ?></h2>
    <p class="carte__description"><?php echo wp_trim_words(get_the_content(), 10, " ... "); ?> </p>
    <button class="carte_button carte__button--actif"> reserver</button>
</div>
</article>
