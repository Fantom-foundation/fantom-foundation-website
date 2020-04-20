<?php
get_header();
$feat_image = wp_get_attachment_url(get_post_thumbnail_id(get_the_id()));
while (have_posts()) : the_post();
  ?>
  <main class="post-sec-page blog-page-sec-wrapper">
      <div class="container">
          <div class="post-page-row">     
              <div class="blog-banner-wrapper">
                  <div class="post-img-sec">
                      <img src="<?php echo $feat_image; ?>" class="post-feat-image" alt="blog-image">
                  </div> 
                  <div class="blog-detail-section">
                      <div class="post-date">
                          <?php echo the_time('F j, Y'); ?>
                      </div>
                      <div class="row">
                          <div class="col-sm-2">
                              <div class="social-icon-wrapper">
                                  <?php echo do_shortcode('[Sassy_Social_Share]') ?>
<!--                                  <a href="https://twitter.com/FantomFDN" target="_blank" class="social-link">
                                      <img src="<?php echo get_template_directory_uri(); ?>/images/twitter.svg" class="social-icon-image" alt="Twitter">  
                                  </a>                                
                                  <a href="https://www.linkedin.com/company/fantom-foundation/" target="_blank" class="social-link">
                                      <img src="<?php echo get_template_directory_uri(); ?>/images/linkedin.svg" class="social-icon-image" alt="Linkedin"> 
                                  </a>                              
                                  <a href="https://www.facebook.com/Fantom.Foundation.English/" target="_blank" class="social-link">
                                      <img src="<?php echo get_template_directory_uri(); ?>/images/facebook.svg" class="social-icon-image" alt="Facebook">  
                                  </a>-->

                              </div>
                          </div>
                          <div class="col-sm-10">
                              <div class="blog-detail-wrapper">                

                                  <div class="post-content">
                                      <h1><?php the_title() ?></h1> 
                                      <div class="category-name">
                                          <span class="category-name-wrapper"><?php the_category(', '); ?></span> 
                                      </div>
                                      <?php the_content() ?>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div> 
          </div>
      </div>
      <div class="read-more-blog-sec">
          <div class="container">
              <h2>Read more</h2>
              <div class="medium-blog-row wrapper-blog-sec">          
                  <?php
                  $args = array(
                      'post_status' => 'publish',
                      'posts_per_page' => 3,
                      'post__not_in' => array(get_the_id())
                  );
                  $blogpost = new WP_Query($args);
                  if ($blogpost->have_posts()) :
                    ?>
                    <?php
                    while ($blogpost->have_posts()) :
                      $blogpost->the_post();
                      ?>
                      <div class="medium-blog-col blog-col-section">
                          <a href="<?php the_permalink(); ?>" class="card-link">
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
                    esc_html_e('No post in the diving taxonomy!', 'text-domain');
                  endif;
                  ?>
              </div>
              <!--mobile-blog-carousel-->
              <div class="mobile-blog-carousel">
                  <div class="medium-blog-row">    
                      <div class="owl-carousel owl-theme" id="medium-blog-carousel">
                          <?php
                          $args = array(
                              'post_status' => 'publish',
                              'posts_per_page' => 3,
                              'post__not_in' => array(get_the_id())
                          );
                          $blogpost = new WP_Query($args);
                          if ($blogpost->have_posts()) :
                            ?>
                            <?php
                            while ($blogpost->have_posts()) :
                              $blogpost->the_post();
                              ?>
                              <div class="medium-blog-col blog-col-section">
                                  <a href="<?php the_permalink(); ?>" class="card-link">
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
                            esc_html_e('No post in the diving taxonomy!', 'text-domain');
                          endif;
                          ?>                        
                      </div>   
                  </div>
              </div>
          </div>
      </div>            
  </main>
  <?php
endwhile;
wp_reset_query();
get_footer();

