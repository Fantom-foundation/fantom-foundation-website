<?php
/*
 * Template Name: Enterprise Page
 */

get_header();
$feat_image = wp_get_attachment_url(get_post_thumbnail_id(get_the_id()));
?>
<main class="sub-menu-page">
    <div class="banner-wrapper-section">
        <div class="container">
            <div class="row row-wrapper">
                <div class="col-sm-6">
                    <div class="sub-menu-banner-content">
                        <?php
                        while (have_posts()) : the_post();
                          the_content();
                        endwhile;
                        ?> 
                    </div>
                </div>
                <div class="col-sm-6">
                    <img src="<?php the_field('banner_image') ?>"  class="wrapper-image banner-image" alt="Header Image"/>
                </div>
            </div>               
        </div>
    </div>
    <div class="blockchain-benefits-sec">
        <div class="container">
            <div class="blockchain-benefits-container">
                <?php the_field('blockchain_benefits_section'); ?>
            </div>  
        </div>    
    </div>
    <div class="benefits-for-enterprises-sec">
        <div class="container">
            <div class="enterprises-card-row">
                <?php
                if (have_rows('blockchain_benefits_card_section')):
                  while (have_rows('blockchain_benefits_card_section')) : the_row();
                    ?>
                    <div class="enterprises-card-col">
                        <img src="<?php the_sub_field('card_icon'); ?>"  class="enterprises-card-icon" alt="Enterprises Card"/>
                        <?php the_sub_field('card_content'); ?>
                    </div>  
                    <?php
                  endwhile;
                else :
                endif;
                ?> 
            </div>
        </div>        
    </div>
    <div class="advantages-of-fantom-sec">
        <div class="container">
            <div class="blockchain-benefits-container">
                <?php the_field('the_advantages_of_fantom_section'); ?>
            </div>
            <div class="advantages-accordion-section">
                <!--accordion-->
                <ul id="accordions" class="accordions">
                    <?php
                    if (have_rows('faq_tab_section')):
                      while (have_rows('faq_tab_section')) : the_row();
                        ?> 
                        <li>
                            <div class="links"><i class="fa fa-chevron-down"></i><?php the_sub_field('heading'); ?></div>
                            <ul class="accordion-contents">
                                <li><?php the_sub_field('content'); ?></li>
                            </ul>
                        </li>
                        <?php
                      endwhile;
                    else :
                    endif;
                    ?> 
                </ul>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>

