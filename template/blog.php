<?php
/*
 * Template Name: Blog Page
 */

get_header();
$feat_image = wp_get_attachment_url(get_post_thumbnail_id(get_the_id()));
?>
<main class="sub-menu-page">
    <div class="banner-wrapper-section">
        <div class="container">
            <div class="categories-section-wrapper">
                <?php
                wp_list_categories(array(
                    'orderby' => 'name',
                    'title_li' => ''
                ));
                ?> 
            </div>
            <div class="row row-wrapper">
                <div class="col-sm-6">
                    <img src="<?php the_field('banner_image') ?>"  class="wrapper-image banner-image" alt="Header Image"/>
                </div>
                <div class="col-sm-6">
                    <div class="sub-menu-banner-content">
                        <?php
                        while (have_posts()) : the_post();
                          the_content();
                        endwhile;
                        ?> 
                    </div>
                </div>              
            </div>               
        </div>
    </div>
</main>
<?php get_footer(); ?>

