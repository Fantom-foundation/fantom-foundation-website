<?php
/*
 * Template Name: Enterprise Page
 */

get_header();
?>
<main class="sub-menu-page">
    <div class="banner-wrapper-section">
        <div class="container">
            <div class="row row-wrapper">
                <div class="col-sm-6 enterprise-banner-content">
                    <div class="sub-menu-banner-content">
                        <?php
                        while (have_posts()) : the_post();
                          the_content();
                        endwhile;
                        ?> 
                    </div>
                </div>
                <div class="col-sm-6 enterprise-banner-image">
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
                            <div class="links"><i class="fa fa-chevron-down"></i><span class="link-heading-wrapper"><?php the_sub_field('heading'); ?></span></div>
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
    <section class="enterprise-case-study-section">
        <div class="container">
            <div class="case-study--animated-header"></div>
            <div class="enterprise-case-study-carousel">
                <?php
                if (have_rows('case_study_section')):
                  $i = 1;
                  while (have_rows('case_study_section')) : the_row();
                    ?> 
                    <article>
                        <div class="case-study--header"  id="sec<?php echo $i ?>">
                            <div class="case-study--header-content">
                                <span class="case-study-title">
                                    <h3><?php the_sub_field('case_study_title'); ?></h3> <span class="case-study--label">Use case</span>
                                </span>                              
                                <?php the_sub_field('case_study_content'); ?>
                            </div>
                            <div class="case-study--screenshot desktop-case-study-sec">
                                <?php
                                if (get_sub_field('youtube_video')) {
                                  ?>
                                  <iframe src="https://www.youtube.com/embed/<?php the_sub_field('youtube_video') ?>?rel=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                  <?php
                                } elseif (get_sub_field('image')) {
                                  ?>
                                  <img class="case-study-image" src="<?php the_sub_field('image') ?>" />      
                                  <?php
                                } else {
                                  echo '<img class="case-study-image" src="' . get_template_directory_uri() . '/images/pladeholder.svg"  alt="" width="400" height="300" />';
                                }
                                ?>
                            </div>
                        </div>
                        <div class="case-study--content">
                            <h4>Solution</h4>
                            <?php the_sub_field('case_study_solution'); ?>
                        </div>
                         <div class="case-study--screenshot mobile-case-study-sec">
                                <?php
                                if (get_sub_field('youtube_video')) {
                                  ?>
                                  <iframe src="https://www.youtube.com/embed/<?php the_sub_field('youtube_video') ?>?rel=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                  <?php
                                } elseif (get_sub_field('image')) {
                                  ?>
                                  <img class="case-study-image" src="<?php the_sub_field('image') ?>" />      
                                  <?php
                                } else {
                                  echo '<img class="case-study-image" src="' . get_template_directory_uri() . '/images/pladeholder.svg"  alt="" width="400" height="300" />';
                                }
                                ?>
                            </div>
                    </article>
                    <?php
                    $i++;
                  endwhile;
                else :
                endif;
                ?>                             
            </div>
        </div>
    </section>
    <div class="fantom-enterprise-section">
        <div class="fantom-enterprise-content">
            <div class="container">
                <?php the_field('about_fantom_enterprise_section'); ?>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>

