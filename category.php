<?php
/**
 * A Simple Category Template
 */
get_header();
$feat_image = wp_get_attachment_url(get_post_thumbnail_id(get_the_id()));
$current_category = single_cat_title("", false);
?>
<main class="category-page-sec">
    <div class="banner-background-wrapper">
        <div class="banner-background-wrapper-overlay"></div>
        <div class="category-banner-wrappers category-section">
            <div class="header-container life-design-banner-content">
                <div class="category-heading"><h1><?php echo $current_category ?></h1></div>               
                <div class="container-list">
                    <a href="/"><i class="fas fa-home"></i></a> <i class="fas fa-angle-right"></i>
                    <a href="/blog">Blog</a> <i class="fas fa-angle-right"></i>
                    <?php the_category(', '); ?>  
                </div>


            </div>
        </div>
    </div>
    <div class="category-col-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 first-col-sec">
                    <section class="category-page-wrapper section">
                        <div class="container">
                            <div class="row">
                                <?php
                                if (have_posts()) {
                                    while (have_posts()) : the_post();
                                        $featimages = wp_get_attachment_url(get_post_thumbnail_id(get_the_id()));
                                        ?>
                                        <div class=" post-wrapper-sec <?php echo $i; ?>s">
                                            <a class="post-link" href="<?php the_permalink(); ?>">
                                                <h3><?php the_title(); ?></h3>
                                                <img class="img-fluid post-image" src="<?php echo $featimages; ?>" alt="<?php the_title(); ?>" />  
                                            </a>
                                            <div class="post-detail">
                                                <div class="post-date">
                                                    <i class="far fa-clock"></i><?php echo the_time('F j, Y'); ?>
                                                </div> 
                                                <div class="folder-name">
                                                    <i class="far fa-folder"></i><?php the_category(', '); ?>  
                                                </div>
                                                <div class="post-author">
                                                    <i class="far fa-user"></i><?php echo get_author_name(); ?>                              
                                                </div>                          
                                            </div>
                                            <?php the_excerpt(); ?>
                                            <a class="post-link" href="<?php the_permalink(); ?>">  <button class="btn continue-reading-btn" type="">Continue Reading<i class="fas fa-angle-right"></i></button>
                                            </a>                                         
                                        </div>
                                        <?php
                                        $i++;
                                    endwhile;
                                } else {
                                    ?>
                                    <div class="alert alert-primary col-12 text-center" role="alert">
                                        Sorry! No posts yet.
                                    </div>
                                    <?php
                                }

                                wp_reset_postdata();
                                ?>

                            </div>
                        </div>
                    </section>
                </div>
                <div class="col-sm-4 right-sec">
                    <section class="related-posts-section">
                        <div class="container">
                            <?php get_search_form(); ?>
                            <h4>RECENT POSTS</h4>
                            <div class="related-posts-row">         
                                <?php
                                $args = array(
                                    'post_type' => 'post',
                                    'post_status' => 'publish',
                                    'posts_per_page' => -1
                                );
                                $testimonials = new WP_Query($args);
                                if ($testimonials->have_posts()) :
                                    ?>
                                    <?php
                                    while ($testimonials->have_posts()) :
                                        $testimonials->the_post();
                                        ?>
                                        <div class="post-wrapper" <?php echo $i; ?>s">
                                             <a class="post-link" href="<?php the_permalink(); ?>">
                                                <p><?php the_title(); ?><p>                             
                                            </a>
                                        </div>

                                        <?php
                                    endwhile;
                                    wp_reset_postdata();
                                    ?>
                                    <?php
                                else :
                                    esc_html_e('No testimonials in the diving taxonomy!', 'text-domain');
                                endif;
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
    </div> 
</main>
<?php
get_footer();
