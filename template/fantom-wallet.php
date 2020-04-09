<?php
/*
 * Template Name: Fantom wallet Page
 */

get_header();
$feat_image = wp_get_attachment_url(get_post_thumbnail_id(get_the_id()));
?>
<main class="fantom-wallet-page">
    <div class="fantom-wallet-section">
        <div class="fantom-wallet-container">

            <div class="wallet-section-wrapper">
                <div class="wallet-section">
                    <a  class="showSingle" id="showall" target="1">Mobile</a>
                    <a  class="showSingle active" id="showall" target="2">Desktop</a>
                </div>
            </div>




            <section class="cnt">
                <div id="div1"  class="targetDiv targetDiv1">
                    <div class="fantom-mobile-wallet-section">
                        <div class="container">
                            <div class="row mobile-row">
                                <div class="col-sm-6 mobile-banner-col-content">
                                    <div class="sub-menu-banner-content">
                                        <?php
                                        while (have_posts()) : the_post();
                                          the_content();
                                        endwhile;
                                        ?> 
                                    </div>
                                </div>
                                <div class="col-sm-6 mobile-banner-col-image">
                                    <img src="<?php the_field('mobile_image') ?>"  class="mobile-image" alt="Mobile Image"/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mobile-col-section">
                        <div class="mobile-col-container">
                            <?php
                            if (have_rows('mobile_two_col_section')):
                              $i = 1;
                              while (have_rows('mobile_two_col_section')) : the_row();
                                if ($i % 2 == 0) {
                                  ?>
                                  <div class="first-mobile-section">
                                      <div class="container">
                                          <div class="row row-background-wrapper"  id="sec<?php echo $i ?>">
                                              <div class="col-sm-6 mobile-wrapper-content">
                                                  <?php the_sub_field('content'); ?>
                                              </div>
                                              <div class="col-sm-6 mobile-wrapper-image">
                                                  <img src="<?php the_sub_field('image'); ?>"  class="mobile-image" alt="Mobile Image"/>
                                              </div>
                                          </div>
                                      </div>
                                  </div>

                                <?php } else { ?>
                                  <div class="sec-mobile-section">
                                      <div class="container">
                                          <div class="row mobile-sec-row"  id="sec<?php echo $i ?>">
                                              <div class="col-sm-6 mobile-wrapper-image">
                                                  <img src="<?php the_sub_field('image'); ?>"  class="mobile-image" alt="Mobile Image"/>
                                              </div>
                                              <div class="col-sm-6 mobile-wrapper-content">
                                                  <?php the_sub_field('content'); ?>
                                              </div>
                                          </div>
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


                    <div class="fantom-wallet-app-section">
                        <div class="container">
                            <?php the_field('mobile_get_the_wallet_app') ?>
                        </div>                       
                    </div>

                </div>








                <div id="div2" class="targetDiv">
                    <div class="fantom-mobile-wallet-section">
                        <div class="container">
                            <div class="row mobile-row">
                                <div class="col-sm-6 desktop-banner-content">
                                    <div class="sub-menu-banner-content">
                                        <?php the_field('desktop_wallet_banne_content') ?>
                                    </div>
                                </div>
                                <div class="col-sm-6 desktop-banner-image">
                                    <img src="<?php the_field('desktop_wallet_banner_image') ?>"  class="banner-desktop-image" alt="Mobile Image"/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="safe-and-secure-section">
                        <div class="container">
                            <?php the_field('safe_and_secure_content_section') ?>
                            <img src="<?php the_field('safe_and_secure_image_section') ?>"  class="safe-and-secure-image" alt="Safe and Secure Image"/>
                        </div>
                    </div>
                    <div class="mobile-col-section">
                        <div class="mobile-col-container">
                            <?php
                            if (have_rows('desktop_wallet_two_col_section')):
                              $i = 1;
                              while (have_rows('desktop_wallet_two_col_section')) : the_row();
                                if ($i % 2 == 0) {
                                  ?>
                                  <div class="first-mobile-section desktop-wallet-first-section">
                                      <div class="container">
                                          <div class="row row-background-wrapper"  id="sec<?php echo $i ?>">
                                              <div class="col-sm-6 first-col-image-wrapper">
                                                  <img src="<?php the_sub_field('image'); ?>"  class="desktop-image earn-crypto-img" alt="Mobile Image"/>                                               
                                              </div>
                                              <div class="col-sm-6 first-col-content">
                                                  <div class="first-col-content-sec">
                                                      <?php the_sub_field('content'); ?>
                                                  </div>                                        
                                              </div>
                                          </div>
                                      </div>
                                  </div>

                                <?php } else { ?>
                                  <div class="sec-mobile-section">
                                      <div class="container">
                                          <div class="row mobile-sec-row"  id="sec<?php echo $i ?>">
                                              <div class="col-sm-6">
                                                  <?php the_sub_field('content'); ?>
                                              </div>
                                              <div class="col-sm-6  secondary-col-image-wrapper">                                                  
                                                  <img src="<?php the_sub_field('image'); ?>"  class="desktop-image easy-to-use-img" alt="Mobile Image"/>
                                              </div>
                                          </div>
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


                    <div class="fantom-wallet-app-section create-wallet-section">
                        <div class="container">
                            <?php the_field('create_your_wallet_section') ?>
                        </div>                       
                    </div>
                </div>
            </section>
        </div>
    </div>
</main>
<?php get_footer(); ?>

