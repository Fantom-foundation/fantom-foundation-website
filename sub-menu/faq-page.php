<?php
/*
 * Template Name: Frequently Asked Questions Page
 */

get_header();
$feat_image = wp_get_attachment_url(get_post_thumbnail_id(get_the_id()));
?>
<main class="sub-menu-page">
    <div class="banner-wrapper-section">
        <div class="container">
            <div class="sub-menu-banner-content roadmap-banner-content">
                <?php
                while (have_posts()) : the_post();
                  the_content();
                endwhile;
                ?> 
            </div>            
        </div>
    </div>
    <div class="pagenav-section-wrapper" id="container-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
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
                            <a href="#<?php the_sub_field('id'); ?>" class=" <?php echo esc_attr($class); ?> myTag" rel="<?php the_sub_field('sub_faq_title_id'); ?>"><?php the_sub_field('title'); ?></a>
                            <div class='<?php the_sub_field('sub_faq_title_id'); ?> mytegone'>
                                <?php
                                if (have_rows('sub_faq_section')):
                                  while (have_rows('sub_faq_section')) : the_row();
                                    ?>
                                    <a href="#<?php the_sub_field('sub_faq_id'); ?>"><?php the_sub_field('sub_faq'); ?></a>
                                    <?php
                                  endwhile;
                                else :
                                endif;
                                ?> 
                            </div>
                            <?php
                          endwhile;
                        else :
                        endif;
                        ?> 
                    </nav>
                </div>
                <div class="col-sm-9">
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
<div class="test">



</div>
<?php get_footer(); ?>

