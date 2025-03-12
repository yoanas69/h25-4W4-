<?php
/**
 * Template-part icone
 */
?>
<?php  $hero_icone =substr( get_theme_mod('hero_couleur', 'fffff'),1); ?>
<div class="hero__icone">
                <img src="https://s2.svgbox.net/social.svg?ic=facebook&color=<?= $hero_icone; ?>" width="20" height="20">
                <img src="https://s2.svgbox.net/social.svg?ic=linkedin&color=<?= $hero_icone; ?>" width="20" height="20">
                <img src="https://s2.svgbox.net/social.svg?ic=stackoverflow&color=<?= $hero_icone; ?>" width="20" height="20">
                <img src="https://s2.svgbox.net/social.svg?ic=snapchat&color=<?= $hero_icone; ?>" width="20" height="20">
            </div>