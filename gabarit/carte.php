<?php
/**
 * Template-part carte
 */
?>
<article class="carte carte--grande">
  <figure class="carte__image">
    <img src="voyage.jpg" alt="Image de voyage">
    </figure>
  <div class="carte__contenu">
    <?php 
    if(has_post_thumbnail()){
      the_post_thumbnail('thumbnail');} 
    ?>
    <h2 class="carte__titre"><?php the_title(); ?></h2>
    <p class="carte__description"><?php echo wp_trim_words(get_the_content(),10, " ... " ); ?></p>
    <button class="carte__bouton carte__bouton--actif"> <a class="carte__bouton carte__bouton--actif" href="<?php the_permalink() ?>">suite</a></button>
   
  </div>
</article>
