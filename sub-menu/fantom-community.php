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
            <h2>Read the latest articles</h2>
            <div class="medium-blog-row wrapper-blog-sec">
                <?php
                $url = 'https://api.rss2json.com/v1/api.json?rss_url=https://medium.com/feed/fantomfoundation';
                $str = file_get_contents($url);
                $json = json_decode($str, true);
                $i = 1;
                foreach ($json['items'] as $item) {
                  if ($i <= 3) {
                    ?>
                    <div class="medium-blog-col">
                        <a href="<?php echo $item['link'] ?>" target="_blank" class="card-link">
                            <div class="card">									
                                <img class="card-img-top" src="<?php echo $item['thumbnail'] ?>" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo $item['title'] ?></h5>
                                    <div class="read-story-btn-wrapper">
                <!-- 											<a href="<?php echo $item['link'] ?>" target="_blank" class="read-story-btn"><span>READ STORY</span></a> -->
                                        <span>READ STORY</span>
                                    </div>                                       
                                </div>							
                            </div>
                        </a>
                    </div>
                    <?php
                  }
                  $i++;
                }
                ?>
            </div>

            <!--mobile blog carousel-->
            <div class="medium-blog-row mobile-blog-carousel"> 
                <div class="owl-carousel owl-theme" id="medium-blog-carousel">

                    <?php
                    $url = 'https://api.rss2json.com/v1/api.json?rss_url=https://medium.com/feed/fantomfoundation';
                    $str = file_get_contents($url);
                    $json = json_decode($str, true);
                    $i = 1;
                    foreach ($json['items'] as $item) {
                      if ($i <= 3) {
                        ?>

                        <div class="medium-blog-col">
                            <a href="<?php echo $item['link'] ?>" target="_blank" class="card-link item">
                                <div class="card">									
                                    <img class="card-img-top" src="<?php echo $item['thumbnail'] ?>" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title"><?php echo $item['title'] ?></h5>
                                        <div class="read-story-btn-wrapper">             
                                            <span>READ STORY</span>
                                        </div>                                       
                                    </div>							
                                </div>
                            </a>
                        </div>

                        <?php
                      }
                      $i++;
                    }
                    ?>
                </div>
            </div>

        </div>
    </div>



</main>
<?php get_footer(); ?>

