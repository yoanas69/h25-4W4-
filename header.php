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
                <span class="entete__span" >&#9819;</span>
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
                    // 'container__class'=>,

                )); ?>
                <nav class="entete__menu">
                    <ul class="menu__ul">
                        <li class="menu__li">
                            <a href="#">Aventure</a>
                        </li>
                        <li class="menu__li">
                            <a href="#">Culturel</a>
                        </li>
                        <li class="menu__li">
                            <a href="#">Zen</a>
                        </li>
                        <li class="menu__li">
                            <a href="#">Sportive</a>
                        </li>
                        <li class="menu__li">
                            <a href="#">Tourtereau</a>
                        </li>
                        <li class="menu__li">
                            <a href="#">sport</a>
                        </li>
                        <li class="menu__li">
                            <a href="#">croisseire</a>
                        </li>
                    </ul>
                </nav>
                <form class="entete__recherche">
                    <input type="search" placeholder="rechercher" class="recherche__input">
                    <img class="recherche__img"  src="https://s2.svgbox.net/hero-outline.svg?ic=search&color=000" width="16" height="16">
                </form>
            </div>
        </div>
        <?php wp_head() ?>
    </header>