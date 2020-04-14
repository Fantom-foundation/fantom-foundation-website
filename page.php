<?php
/*
 *  Template Name: New page
 */
get_header('delivero');
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