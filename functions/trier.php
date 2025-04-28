 <?php
 function categorie_par_destination($cat_a_retirer){
    $categories = get_the_category($cat_a_retirer);
    if ($categories) {
        foreach ($categories as $category) {
            if ($category->name != "galerie" && $category->name != single_cat_title('', false)) {
                echo '<ul class="post-categories">';
                echo '<li><a href="' . esc_url(get_category_link($category->term_id)) . '" rel="category tag">';
                echo esc_html($category->name);
                echo '</a></li>'; 
                echo '</ul>'; 
            } else {
                echo '<ul class="post-categories" style="display: none">';
                echo '<li><a href="' . esc_url(get_category_link($category->term_id)) . '" rel="category tag">';
                echo esc_html($category->name);
                echo '</a></li>'; 
                echo '</ul>'; 
            }
        }
    }
}
 
 
 
 ; ?>