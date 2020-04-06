<?php
/*
 * Template Name: Home Page
 */

get_header();
$feat_image = wp_get_attachment_url(get_post_thumbnail_id(get_the_id()));
?>
<main class="about-sec-page">
    <div class="home-banner-sec-wrapper">
        <div class="container">
            <div class="row banner-row">
                <div class="col-sm-6">
                    <div class="banner-content">
                        <h1>Ready, set, build</h1>
                        <p>A blockchain ecosystem designed to help you focus on real-world solutions to real-world problems, with no compromise.  </p>
                        <a class="get-started-btn" href="#">Get Started</a> 
                    </div>
                </div>
                <div class="col-sm-6">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/fantom-file .svg"  class="image-wrapper" alt="Header Image"/>
                </div>
            </div>
        </div>
    </div>
    <div class="home-banner-sec">
        <div class="container">         
            <div class="home-section">
                <div class="home-banner">
                    <?php
                    while (have_posts()) : the_post();
                      the_content();
                    endwhile;
                    ?>
<!--                    <img src="<?php //the_field('home_banner_image')                                  ?>"/>                                 -->
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
                    <div class="col-sm-6">
                        <div class="rangeslider-sec">
                            <h4>Staking calculator</h4>
                            <p>Find out what's your ataking rewards</p>
                            <h5 class="you-stake-wrapper">You stake <span class="text-blue">156,000 FTM</span></h5>
                            <div class="budget-wrap">
                                <div class="budget">                         
                                    <div class="content">
                                        <input type="range" min="10" max="100"  step="0.1" value="58.62" data-rangeslider>                                       
                                        <ul class="range-number">
                                            <li>0</li>
                                            <li>100k</li>
                                            <li>1m</li>
                                            <li>10m</li>
                                            <li>100m</li>
                                        </ul>         
                                    </div>                                
                                </div>
                            </div>
                            <div class="rewards-section">
                                <div class="rewards-wrapper">
                                    <h5>Your yearly rewards</h5>
                                    <span class="text-blue">65,434 FTM</span>
                                </div>
                                <div class="rewards-wrapper">
                                    <h5>Current APR</h5>
<!--                                    <span class="text-blue float-right">58.62%</span>-->
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
    <div class="developer-friendly-section">
        <div class="container">
            <div class="developer-friendly-wrapper">
                <?php the_field('developer_friendly_section') ?>                      
                <div class="code-section-wrapper">
                    <div class="row">
                        <div class="col-sm-2">
                            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Request</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Response</a>
                                </li>
                            </ul>
                            <a class="api-reference" href="#" target="_blank">Full API reference</a>
                        </div>
                        <div class="col-sm-10">
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">  <section>
                                        <div class="containers">
                                            <div class="code-container">
                                                <textarea id="code">
                                                    <?php the_field('developer_friendly_code') ?>
                                                </textarea>
                                            </div>
                                        </div>
                                    </section></div>
                                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">  <section>
                                        <div class="containers">
                                            <div class="code-container" id="code-wrapper">
                                                <textarea id="code1">
                                                    <?php the_field('developer_friendly_code') ?>
                                                </textarea>
                                            </div>
                                        </div>
                                    </section></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
        </div>                    
    </div>
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
    <div class="customer-logo-wrapper">
        <div class="container">
            <a href="#" class="customer_logo-container">
                <span class="see-our-customers-btn">See our integrations</span>
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
    <div class="medium-blog-section desktop-medium-blog-sec">
        <div class="container">
            <h2>What’s new at Fantom</h2>
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
                <!-- 											<a href="<?php echo $item['link'] ?>" target="_blank" class="read-story-btn"><span>READ STORY</span></a> -->
                                        <span>READ STORY</span>
                                    </div>                                       
                                </div>							
                            </div>
                        </a>
                    </div>
                    <?php
                    //echo '<pre>' . print_r($item) . '</pre>';
                  }
                  $i++;
                }
                ?>
            </div>
        </div>
    </div>
    <!--mobile-->
    <div class="medium-blog-section mobile-medium-blog-sec">
        <div class="container">
            <h2>What’s new at Fantom</h2>
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

