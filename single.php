<?php
/*
 * Template Name:  post single page
 */

get_header();
$feat_image = wp_get_attachment_url(get_post_thumbnail_id(get_the_id()));
while (have_posts()) : the_post();
    ?>
    <main class="post-sec-page">
        <div class="container">
            <div class="row post-page-row">
                <div class="col-sm-8 first-col-sec">
                    <div class="fullwidth banner-section single-wrapper">
                        <div class="blog-banner-wrapper">
                            <div class="post-img-sec">
                                <img src="<?php echo $feat_image; ?>" class="post-feat-image" alt="blog-image">
                            </div> 
                            <h1><?php the_title() ?></h1>
                            <div class="post-detail">
                                <div class="post-date">
                                    <i class="far fa-clock"></i><?php echo the_time('F j, Y'); ?>
                                </div> 
                                <div class="post-author">
                                    <i class="far fa-user"></i><?php echo get_author_name(); ?>                              
                                </div>                          
                            </div>
                            <div class="post-content">
                                <?php the_content() ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 right-sec">
                    <section class="related-posts-section">
                        <div class="container">
                            <?php get_search_form(); ?>
                            <h4>Related Posts</h4>
                            <div class="related-posts-row">
                                <?php
                                $i = 1;
                                $terms = get_the_terms(get_the_ID(), 'category');
                                $term_list = wp_list_pluck($terms, 'slug');
                                $related_args = array(
                                    'post_type' => 'post',
                                    'posts_per_page' => -1,
                                    'post_status' => 'publish',
                                    'post__not_in' => array(get_the_ID()),
                                    'orderby' => 'rand',
                                    'tax_query' => array(
                                        array(
                                            'taxonomy' => 'category',
                                            'field' => 'slug',
                                            'terms' => $term_list
                                        )
                                    )
                                );
                                $loop = new WP_Query($related_args);
                                if ($loop->have_posts()) :
                                    while ($loop->have_posts()) : $loop->the_post();
                                        $featimages = wp_get_attachment_url(get_post_thumbnail_id(get_the_id()));
                                        ?>
                                        <div class="post-wrapper" <?php echo $i; ?>s">
                                             <a class="post-link" href="<?php the_permalink(); ?>">
                                                <p><?php the_title(); ?><p>                             
                                            </a>
                                        </div>
                                        <?php
                                        $i++;
                                    endwhile;
                                endif;
                                wp_reset_postdata();
                                ?>
                            </div>
                            <div class="categories-section-wrapper">
                                  <h4>CATEGORIES</h4>
                                <?php
                                wp_list_categories(array(
                                    'orderby' => 'name',
                                    'title_li' => ''
                                ));
                                ?> 
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>



    </main>
    <?php
endwhile;
wp_reset_query();
get_footer();

