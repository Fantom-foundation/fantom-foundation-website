<?php
/*
 *  Template Name: New page
 */
<<<<<<< HEAD
get_header();
=======
get_header('delivero');
>>>>>>> 90ce16e4fb0a7aaca940e4c6be04428acc8a243e
?>
<main> 
    <div class="banner-wrap-section banner-wrapper-section">
        <div class="banner-content-wrapper">     
            <?php
            while (have_posts()) : the_post();
                the_content();
            endwhile;
            ?> 
        </div>
    </div> 
</main>

<?php get_footer(); ?>