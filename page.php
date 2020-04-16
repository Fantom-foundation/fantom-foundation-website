<?php
get_header();
?>
<main> 
    <div class="banner-wrap-section banner-wrapper-section simple-page">
        <div class="banner-content-wrapper sub-menu-banner-content"> 
            <div class="container">
                <?php
                while (have_posts()) : the_post();
                  the_content();
                endwhile;
                ?> 
            </div>         
        </div>
    </div> 
</main>

<?php get_footer(); ?>