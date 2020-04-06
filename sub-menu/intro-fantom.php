<?php
/*
 * Template Name: Intro to Fantom Page
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
    <!--    <div class="navigation-section">
            <div class="container" id="container-wrapper">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="wrapper wrap" id="wrap">
                            <nav class="navigation" id="mainNav">
    <?php
    if (have_rows('navigation_section')):
      while (have_rows('navigation_section')) : the_row();
        ?> 
                                            <a class="navigation__link" href="#<?php the_sub_field('id'); ?>"><?php the_sub_field('title'); ?></a>  
        <?php
      endwhile;
    else :
    endif;
    ?> 
                            </nav>
                        </div>
                    </div>
                    <div class="col-sm-8">
    <?php
    if (have_rows('navigation_section')):
      while (have_rows('navigation_section')) : the_row();
        ?> 
                                    <div class="page-section hero" id="<?php the_sub_field('id'); ?>">
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
        </div>-->
    <div class="pagenav-section-wrapper" id="container-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <nav class="pagenav" id="pagenav">

                        <?php
                        if (have_rows('navigation_section')):
                          $query = new WP_Query($wpplnum);
                          $first = TRUE;
                          while (have_rows('navigation_section')) : the_row();
                            $class = "";
                            if ($first) {
                              $class = "active";
                              $first = FALSE;
                            }
                            ?> 
                            <a href="#<?php the_sub_field('id'); ?>" class=" <?php echo esc_attr($class); ?>"><?php the_sub_field('title'); ?></a>
                            <?php
                          endwhile;
                        else :
                        endif;
                        ?> 

                    </nav>
                </div>
                <div class="col-sm-8">
                    <div class="pagenav-section">
                        <?php
                        if (have_rows('navigation_section')):
                          while (have_rows('navigation_section')) : the_row();
                            ?> 
                            <section class="pagenav-wrapper" id="<?php the_sub_field('id'); ?>"> <?php the_sub_field('content'); ?></section>
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
</main>
<?php get_footer(); ?>

