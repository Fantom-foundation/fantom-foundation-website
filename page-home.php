<?php
/*
 * Template Name: Home Page
 */
get_header();
$feat_image = wp_get_attachment_url(get_post_thumbnail_id(get_the_id()));
?>
<main class="home-sec-page">
    <div class="home-banner-sec-wrapper">
        <div class="container">
            <div class="row banner-row">
                <div class="col-sm-6">
                    <div class="banner-content">
                        <?php
                        while (have_posts()) : the_post();
                          the_content();
                        endwhile;
                        ?>                     
                    </div>
                </div>
                <div class="col-sm-6">
                    <img src="<?php the_field('home_banner_image') ?>"  class="image-wrapper" alt="Header Image"/>
                </div>
            </div>
        </div>
    </div>
    <div class="home-banner-sec">
        <div class="container">         
            <div class="home-section">
                <div class="home-banner">
                    <?php the_field('speed_security_scalability_content') ?>
                </div>
                <div class="three-col-section">
                    <div class="row">
                        <?php
                        if (have_rows('three_col_section')):
                          while (have_rows('three_col_section')) : the_row();
                            ?>
                            <div class="col-sm-4">
                                <div class="three-col-wrapper">
                                    <img src="<?php the_sub_field('icon'); ?>"/>  
                                    <h4><?php the_sub_field('title'); ?></h4>
                                    <p><?php the_sub_field('content'); ?></p>
                                </div> 
                            </div>
                            <?php
                          endwhile;
                        else :
                        endif;
                        ?>  
                    </div>
                </div>
                <div class="row stake-row section-wrapper">
                    <div class="col-sm-6">
                        <div class="stake-fantom-section">
                            <?php the_field('stake_on_fantom_section') ?>                     
                        </div>
                    </div>
                    <!-- Rangeslider Section-->
                    <div class="col-sm-6">
                        <div class="rangeslider-sec"> 
                            <?php the_field('staking_calculator_heading_wrapper') ?>
                            <h5 class="you-stake-wrapper"><?php the_field('ftm_number') ?></h5>
                            <div class="budget-wrap">
                                <div class="budget">                         
                                    <div class="content">
                                        <input type="range" min="<?php the_field('range_minimum_number') ?>" max="<?php the_field('range_maximum_number') ?>"  step="<?php the_field('range_step') ?>" value="<?php the_field('range_valu') ?>" data-rangeslider>                                       
                                        <ul class="range-number">
                                            <?php
                                            if (have_rows('range_number')):
                                              while (have_rows('range_number')) : the_row();
                                                ?> 
                                                <li><?php the_sub_field('number'); ?></li>
                                                <?php
                                              endwhile;
                                            else :
                                            endif;
                                            ?>    
                                        </ul>         
                                    </div>                                
                                </div>
                            </div>
                            <div class="rewards-section">
                                <div class="rewards-wrapper">
                                    <h5><?php the_field('yearly_rewards_heading_wrapper') ?></h5>
                                    <span class="text-blue"><?php the_field('yearly_rewards_ftm_number') ?></span>
                                </div>
                                <div class="rewards-wrapper">
                                    <h5><?php the_field('current_apr_heading_wrapper') ?></h5>
                                    <div class="header">
                                        <div class="title clearfix"><span class="pull-right text-blue float-right"></span></div>
                                    </div>
                                </div>
                            </div>
                        </div>                     
                    </div>
                </div>
                <div class="two-col-section">
                    <?php
                    if (have_rows('two_col_section')):
                      $i = 1;
                      while (have_rows('two_col_section')) : the_row();
                        if ($i % 2 == 0) {
                          ?>
                          <div class="row" id="sec<?php echo $i ?>">
                              <div class="col-sm-6 content-sec">
                                  <?php the_sub_field('content'); ?>

                              </div>
                              <div class="col-sm-6">
                                  <img src="<?php the_sub_field('image'); ?>"/> 
                              </div>
                          </div>
                        <?php } else { ?>
                          <div class="row" id="sec<?php echo $i ?>">
                              <div class="col-sm-6 image-col-sec">
                                  <img src="<?php the_sub_field('image'); ?>"/>                                                               
                              </div>
                              <div class="col-sm-6 content-sec">
                                  <?php the_sub_field('content'); ?>  
                              </div>
                          </div>
                          <?php
                        }
                        $i++;
                      endwhile;
                    else :
                    endif;
                    ?> 
                </div>                            
            </div>
        </div>
    </div>
    <!-- Developer Friendly Section-->
    <div class="developer-friendly-section">
        <div class="container">
            <div class="developer-friendly-wrapper">
                <?php the_field('developer_friendly_section') ?>                      
                <div class="code-section-wrapper">
                    <div class="tabs row">
                        <div class="col-sm-2">
                            <ul id="tabs-nav">
                                <li class="active"><a href="#tab1"><?php the_field('request_title') ?></a></li>
                                <li><a href="#tab2"><?php the_field('response_title') ?></a></li>
                            </ul>
                            <a class="api-reference" href="#" target="_blank"><?php the_field('full_api_reference_title') ?></a>
                        </div>
                        <div class="col-sm-10">                  
                            <div id="tabs-content">
                                <div id="tab1" class="tab-content">
                                    <div class="code-container">
                                        <textarea id="code"><?php the_field('response_code_section') ?></textarea>
                                    </div>
                                </div>
                                <div id="tab2" class="tab-content">
                                    <div class="code-container">
                                        <textarea id="code1"><?php the_field('request_code_section') ?></textarea>
                                    </div>
                                </div>
                            </div> 
                        </div>   
                    </div>
                </div>
            </div> 
        </div>                    
    </div>
    <!--  Two col section-->
    <div class="powered-by-fantom-section">
        <div class="container">
            <div class="powered-by-fantom-content">
                <?php the_field('powered_by_fantom_section') ?>
            </div>

            <div class="two-col-section">
                <?php
                if (have_rows('powered_by_fantom_col_section')):
                  $i = 1;
                  while (have_rows('powered_by_fantom_col_section')) : the_row();
                    if ($i % 2 == 0) {
                      ?>
                      <div class="row" id="sec<?php echo $i ?>">
                          <div class="col-sm-6 content-sec">
                              <?php the_sub_field('content'); ?>

                          </div>
                          <div class="col-sm-6">
                              <img src="<?php the_sub_field('image'); ?>"/> 
                          </div>
                      </div>
                    <?php } else { ?>
                      <div class="row" id="sec<?php echo $i ?>">
                          <div class="col-sm-6 image-col">
                              <img src="<?php the_sub_field('image'); ?>"/>                                                               
                          </div>
                          <div class="col-sm-6 content-sec">
                              <?php the_sub_field('content'); ?>  
                          </div>
                      </div>
                      <?php
                    }
                    $i++;
                  endwhile;
                else :
                endif;
                ?> 
            </div> 
        </div>            
    </div>
    <!--See our integrations section-->
    <div class="customer-logo-wrapper">
        <div class="container">
            <a href="#" class="customer_logo-container">
                <span class="see-our-customers-btn"><?php the_field('see_our_integrations_title') ?></span>
                <ul>
                    <?php
                    if (have_rows('customer_logo_section')):
                      while (have_rows('customer_logo_section')) : the_row();
                        ?>
                        <li><img class="kickstarter" alt="kickstarter" src="<?php the_sub_field('customer_logo'); ?>">
                        </li>
                        <?php
                      endwhile;
                    else :
                    endif;
                    ?>
                </ul>
            </a>
        </div>
    </div>
    <!-- Medium Blog Section-->
    <div class="medium-blog-section desktop-medium-blog-sec">
        <div class="container">
            <h2><?php the_field('what’s_new_at_fantom_title') ?></h2>
            <div class="medium-blog-row">
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
    <!--Mobile Medium Blog Carousel-->
    <div class="medium-blog-section mobile-medium-blog-sec">
        <div class="container">
            <h2><?php the_field('what’s_new_at_fantom_title') ?></h2>
            <div class="medium-blog-row"> 
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

