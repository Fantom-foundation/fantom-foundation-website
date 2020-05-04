<?php
/*
 * Template Name: Contact Page
 */

get_header();
?>
<main class="sub-menu-page contact-Page">
    <div class="banner-wrapper-section">
        <div class="container">
            <div class="row row-wrapper">
                <div class="col-sm-5 get-in-touch-sec">
                    <div class="sub-menu-banner-content">
                        <?php
                        while (have_posts()) : the_post();
                          the_content();
                        endwhile;
                        ?> 
                    </div>
                </div>
                <div class="col-sm-7 form-section">
                    <div class="form-wrapper-sec">
                        <?php echo do_shortcode('[contact-form-7 id="947" title="Contact Page Form"]') ?>
                    </div>                   
                </div>
            </div>               
        </div>
    </div>
</main>

<?php get_footer(); ?>

