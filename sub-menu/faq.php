<?php
/*
 * Template Name: FAQ Page
 */

get_header();
$feat_image = wp_get_attachment_url(get_post_thumbnail_id(get_the_id()));
?>
<main class="sub-menu-page">
    <div class="banner-wrapper-section faq-banner-wrapper">
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
                                <a href="#<?php the_sub_field('id'); ?>" class=" <?php echo esc_attr($class); ?>"><?php the_sub_field('title'); ?></a>
                                <?php
                              endwhile;
                            else :
                            endif;
                            ?> 
                        </nav>
                    </div>
                    <div class="col-sm-9">
                        <div class="pagenav-section faq-pagenav-section">
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
    </div>


</main>
<?php get_footer(); ?>

