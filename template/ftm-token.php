<?php
/*
 * Template Name: FTM Token Page
 */

get_header();
$feat_image = wp_get_attachment_url(get_post_thumbnail_id(get_the_id()));
?>
<main class="sub-menu-page">
    <div class="banner-wrapper-section ftm-token-wrapper-section">
        <div class="container">
            <div class="row-wrapper">
                <div class="ftm-token-banner-content">
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
        <div class="ftm-used-for-sec">
            <div class="container">
                <h2><?php the_field('ftm_used_for_title') ?></h2>
                <div class="ftm-used-two-col-sec">
                    <div class="row">
                        <?php
                        if (have_rows('ftm_used_for_section')):
                          while (have_rows('ftm_used_for_section')) : the_row();
                            ?>
                            <div class="col-sm-6 ftm-col">
                                <img src="<?php the_sub_field('icon'); ?>" class="ftm-icon-wrapper" alt="FTM"/>
                                <h3><?php the_sub_field('title'); ?></h3>
                                <?php the_sub_field('content'); ?>
                            </div>
                            <?php
                          endwhile;
                        else :
                        endif;
                        ?>
                    </div>
                    <img src="<?php the_field('ftm_used_for_image') ?>"  class="ftm-wrapper-image desktop-ftm-image" alt="FTM Image"/>
                    <img src="<?php the_field('ftm_used_for_mobile_image') ?>"  class="ftm-wrapper-image mobile-ftm-image" alt="FTM Image"/>
                </div>
            </div>
        </div>
        <div class="ftm-col-section">
            <div class="container">
                <div class="ftm-col-wrapper">
                    <?php
                    if (have_rows('the_ftm_supply_section')):
                      while (have_rows('the_ftm_supply_section')) : the_row();
                        ?>
                        <div class="the-ftm-supply">
                            <h2><?php the_sub_field('title'); ?></h2>
                            <?php the_sub_field('content'); ?>
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
</main>
<?php get_footer(); ?>

