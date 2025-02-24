<footer>
    <div class="piedpage global">
        <section class="piedpage__s1">
            <div class="piedpage__s1__externe">
                <?php wp_nav_menu(array(
                    "menu" => "externe",
                    "container" => "nav",
                )); ?>
            </div>
            <div class="piedpage__s1__adresse">
            <div class="piedpage__s1__adresse__coord">
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Veniam totam,

            </div>    
            <div class="piedpage__s1__adresse__recherche">
                <?php get_search_form(); ?>
            </div> 
            </div>
            <div class="piedpage__s1__description">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis repellendus natus quia impedit obcaecati suscipit reiciendis maxime temporibus provident dolores, ducimus, eum quos a exercitationem! Placeat atque dicta eaque cumque.

            </div>
        </section>
        <section class="piedpage__s2"></section>
        <section class="piedpage__s3"></section>

    </div>
</footer>
<?php wp_footer() ;?>