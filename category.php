<?php
/**
 * A Simple Category Template
 */
get_header();
$feat_image = wp_get_attachment_url(get_post_thumbnail_id(get_the_id()));
$current_category = single_cat_title("", false);
?>

<main class="sub-menu-page blog-page-sec-wrapper">
    <div class="banner-wrapper-section">
        <div class="container">

            <div class="category-row-wrapper">          
                <?php
                $args = array(
                    'post_type' => 'post',
                    'category' => '<?php the_category(', '); ?>',
                    'post_status' => 'publish',
                    'posts_per_page' => 1
                );
                $testimonials = new WP_Query($args);
                if ($testimonials->have_posts()) :
                  ?>
                  <?php
                  while ($testimonials->have_posts()) :
                    $testimonials->the_post();
                    ?>
                    <div class="category-col-wrapper blog-col">
                        <div class="blog-col-wrapper row">                            
                            <div class="col-sm-6">
                                <a class="post-link post-blog-link" href="<?php the_permalink(); ?>"> 
                                    <img src=" <?php the_post_thumbnail_url($size); ?>" class="post-feat-image" alt="post-image" class="post-image"> 
                                </a>
                            </div>
                            <div class="col-sm-6">
                                <span class="category-name-sec">
                                    <?php the_category(', '); ?>      
                                </span>
                                <a class="post-link post-blog-link" href="<?php the_permalink(); ?>"> 
                                    <h4><?php the_title(); ?></h4>
                                </a>
                                <?php the_excerpt(); ?>
                                <div class="latest-blog-date">								
                                    <span><?php echo the_time('F j, Y'); ?></span>
                                </div>  
                            </div>                                                           
                        </div>
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

            <div class="category-row-wrapper medium-blog-row">
                <?php
                if (have_posts()) {
                  while (have_posts()) : the_post();
                    $featimages = wp_get_attachment_url(get_post_thumbnail_id(get_the_id()));
                    ?>
                    <div class="medium-blog-col blog-col-section">
                        <a href="<?php the_permalink(); ?>" class="card-link">
                            <div class="card">									
                                <img class="card-img-top" src="<?php the_post_thumbnail_url($size); ?>" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title"><?php the_title(); ?></h5>
                                    <div class="read-story-btn-wrapper">								
                                        <span><?php echo the_time('F j, Y'); ?></span>
                                    </div>                                       
                                </div>							
                            </div>
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
    </div>
</main>

<?php
get_footer();
