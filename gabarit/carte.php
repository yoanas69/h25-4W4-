<?php
/**
 * Template-part carte
 */
?>
<!-- 
    // if(has_post_thumbnail()){
    //   get_the_post_thumbnail('medium');} 
-->
<article class="carte carte--grande"> 
  <div class="carte__contenu"> 
    <figure>
    <?php 
    if(has_post_thumbnail()){
      the_post_thumbnail('medium');} 
    ?>
    </figure>
    <h3 class="carte__titre"><?php the_title(); ?></h3>
    <p class="carte__description"><?php echo wp_trim_words(get_the_content(),10, " ... " ); ?></p>
    <?php the_category(); ?>
    <p> Température moyene : <?php the_field('temperature_moyene'); ?></p>
    <button class="carte__bouton carte__bouton--actif"> <a class="carte__bouton carte__bouton--actif" href="<?php the_permalink() ?>">suite</a></button>
   
     
  </div>
</article>
