<?php
/*
 * Template Name: Join the Fantom community Page
 */

get_header();
$feat_image = wp_get_attachment_url(get_post_thumbnail_id(get_the_id()));
?>
<main class="sub-menu-page">
    <div class="banner-wrapper-section">
        <div class="container">
            <div class="fantom-community-section">
                <div class="sub-menu-banner-content">
                    <?php
                    while (have_posts()) : the_post();
                      the_content();
                    endwhile;
                    ?> 
                </div>   
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
    <div class="medium-blog-section">
        <div class="container">
            <h2><?php the_field('read_the_latest_articles_heading') ?></h2>
            <div class="medium-blog-row wrapper-blog-sec">
                <?php
                $args = array(
                    'post_type' => 'post',
                    'post_status' => 'publish',
                    'posts_per_page' => 3
                );
                $blogpost = new WP_Query($args);
                if ($blogpost->have_posts()) :
                  ?>
                  <?php
                  while ($blogpost->have_posts()) :
                    $blogpost->the_post();
                    ?>
                    <div class="medium-blog-col">
                        <a href="<?php the_permalink(); ?>" target="_blank" class="card-link">
                            <div class="card">									
                                <img class="card-img-top" src="<?php the_post_thumbnail_url($size); ?>" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title"><?php the_title(); ?></h5>
                                    <div class="read-story-btn-wrapper">
                                        <span>READ STORY</span>
                                    </div>                                       
                                </div>							
                            </div>
                        </a>
                    </div>
                    <?php
                  endwhile;
                  wp_reset_postdata();
                  ?>
                  <?php
                else :
                  esc_html_e('No blogpost in the diving taxonomy!', 'text-domain');
                endif;
                ?>
            </div>

            <!--mobile blog carousel-->
            <div class="medium-blog-row mobile-blog-carousel"> 
                <div class="owl-carousel owl-theme" id="medium-blog-carousel">
                    <?php
                    $args = array(
                        'post_type' => 'post',
                        'post_status' => 'publish',
                        'posts_per_page' => 3
                    );
                    $blogpost = new WP_Query($args);
                    if ($blogpost->have_posts()) :
                      ?>
                      <?php
                      while ($blogpost->have_posts()) :
                        $blogpost->the_post();
                        ?>
                        <div class="medium-blog-col">
                            <a href="<?php the_permalink(); ?>" target="_blank" class="card-link">
                                <div class="card">									
                                    <img class="card-img-top" src="<?php the_post_thumbnail_url($size); ?>" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title"><?php the_title(); ?></h5>
                                        <div class="read-story-btn-wrapper">
                                            <span>READ STORY</span>
                                        </div>                                       
                                    </div>							
                                </div>
                            </a>
                        </div>
                        <?php
                      endwhile;
                      wp_reset_postdata();
                      ?>
                      <?php
                    else :
                      esc_html_e('No blogpost in the diving taxonomy!', 'text-domain');
                    endif;
                    ?>
                </div>
            </div>

        </div>
    </div>



</main>
<?php get_footer(); ?>

