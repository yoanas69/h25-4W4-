<?php
/**
 * Template-part carte
 */
?>
<article class="carte carte--grande" style="background-image: url('<?php 
    if (has_post_thumbnail()) {
        $thumbnail_url = get_the_post_thumbnail_url(null, 'thumbnail'); 
        echo esc_url($thumbnail_url); 
    } 
?>'); background-size: cover;">
  
  <a href="<?php the_permalink(); ?>" class="carte__lien-article">  
    <div class="carte__contenu">
    
      <h3 class="carte__titre"><?php the_title(); ?></h3>
      <p class="carte__description"><?php echo wp_trim_words(get_the_content(), 10, " ... "); ?></p>
      
      <?php
      $categories = get_the_category();
      if ($categories) {
        
          foreach ($categories as $category) {
            if ($category->name != "galerie" && $category->name != single_cat_title('', false)) {
            echo '<ul class="post-categories">';
              echo '<li><a href="' . esc_url(get_category_link($category->term_id)) . '" rel="category tag">';
                  echo esc_html($category->name);
                  echo '</a></li>'; 
                  echo '</ul>'; 
              } else {
                echo '<ul class="post-categories" style = "display :">';
                echo '<li><a href="' . esc_url(get_category_link($category->term_id)) . '" rel="category tag">';
                    echo esc_html($category->name);
                    echo '</a></li>'; 
                    echo '</ul>'; 
              }
             
          }
         
      }
      ?>

      <p class="carte__temperature">Température moyenne : <?php the_field('temperature_moyene'); ?> °C</p>
    </div>
  </a>

</article>
