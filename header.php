<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Club de voyage</title>
    <link rel="stylesheet" href="normalize.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <div class="entete">
            <figure class="entete__logo">
                <span class="entete__span">&#9819;</span>
                 <?php if (function_exists('the_custom_logo')) {
                the_custom_logo();
            } ?>
            </figure>
           
            <div class="entete__burger">

                <label for="entete__toggle" class="entete__icon">
                    <span class="entete__barre"></span>
                    <span class="entete__barre"></span>
                    <span class="entete__barre"></span>
                </label>
            </div>
            <input type="checkbox" id="entete__toggle" class="entete__toggle">
            <div class="entete__navigation">
                <?php wp_nav_menu(array(
                    'menu' => 'principal',
                    'container' => 'nav',
                    'container_class' => 'entete__menu'
                )); ?>

              <?php get_search_form(); ?>
            </div>
        </div>
        <?php wp_head() ?>
    </header>