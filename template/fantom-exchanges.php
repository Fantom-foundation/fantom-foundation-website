<?php
/*
 * Template Name: Fantom exchanges Page
 */

get_header();
$feat_image = wp_get_attachment_url(get_post_thumbnail_id(get_the_id()));
?>
<main class="sub-menu-page">
    <div class="banner-wrapper-section">
        <div class="container">
            <div class="row-wrapper">
                <div class="get-col-wrapper">
                    <div class="sub-menu-banner-content get-started-content">
                        <?php
                        while (have_posts()) : the_post();
                          the_content();
                        endwhile;
                        ?> 
                    </div>
                    <div class="cryptocurrency-exchanges">
                        <div class="card-section">
                            <?php
                            if (have_rows('card_content')):
                              while (have_rows('card_content')) : the_row();
                                ?> 
                                <div class="card-wrapper">
                                    <a href="<?php the_sub_field('link'); ?>" target="_blank" class="get-card-link">
                                        <img src="<?php the_sub_field('card_image'); ?>"  class="card-image" alt="Card Image"/>
                                        <h3><?php the_sub_field('card_title'); ?></h3>
                                        <p><?php the_sub_field('card_text'); ?></p>
                                    </a>
                                </div>
                                <?php
                              endwhile;
                            else :
                            endif;
                            ?>                                    
                        </div>
                    </div>
                </div>
            </div>               
        </div>
    </div>
</main>
<?php get_footer(); ?>

