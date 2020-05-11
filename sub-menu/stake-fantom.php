<?php
/*
 * Template Name: Stake Fantom and earn rewards Page
 */

get_header();
$feat_image = wp_get_attachment_url(get_post_thumbnail_id(get_the_id()));
$data = getGraphqlValue();
?>
<main class="sub-menu-page">
    <div class="banner-wrapper-section">
        <div class="container">
            <div class="row row-wrapper">
                <div class="col-sm-6">
                    <div class="sub-menu-banner-content">
                        <?php
                        while (have_posts()) : the_post();
                          the_content();
                        endwhile;
                        ?> 
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="your-rewards-section">
                        <span class="your-rewards-wrapper">Estimate your rewards</span>
                    </div>  
                    <div class="rangeslider-sec staking-rangeslider-sec">
                        <h5 class="opera-address-wrapper">Enter your FTM amount </h5>
                        <div class="budget-wrap">
                            <div class="staking-budget">                          
                                <div class="staking-content">
                                    <form class="staking-form">                                    
                                        <input type="text" id="fname" value="" max="10000000" name="fname" placeholder="1,000,000 FTM">
                                    </form>
                                </div>                                
                            </div>
                        </div>
                        <div class="rewards-section">
                            <div class="rewards-wrapper">
                                <h5>Your monthly rewards</h5>
                                <span class="text-blue" id="monthlyReward">
                                    <?php 
                                    $monthlystaked = 1000000 * $data['monthlyReward'] / 100;
                                    echo number_format($monthlystaked);
                                    ?> FTM </span>
                                <input type="hidden" value="<?php echo $data['monthlyReward']; ?>" id="rewardpercentagemonthly"/>
                            </div>
                            <div class="rewards-wrapper">
                                <h5>Your yearly rewards</h5>
                                <span class="text-blue" id="yearReward">
                                    <?php
                                    $yearlystaked = 1000000 * $data['yearlyReward'] / 100;
                                    echo number_format($yearlystaked);
                                    ?>
                                    FTM</span>
                                <input type="hidden" value="<?php echo $data['yearlyReward']; ?>" id="rewardpercentageYearly"/>
                                <input type="hidden" value="<?php echo $data['totalStaked']; ?>" id="totalStaked" />
                            </div>
                        </div>
                        <div class="rewards-section staking-rewards-section">
                            <div class="rewards-wrapper">
                                <h5 class="total-staked">Total staked</h5>
                                <span class="text-blue" id="totalStakedpercentage">45.03%</span>
                            </div>
                            <div class="rewards-wrapper">
                                <h5 class="total-staked">Current APR</h5>
                                <span class="text-blue"><?php echo $data['yearlyReward']; ?>% </span>
                            </div>
                        </div>
                    </div> 
                </div>
            </div>                
        </div>
    </div>
    <div class="pagenav-section-wrapper" id="container-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <nav class="pagenav" id="pagenav">
                        <a href="#1" class="active"><?php the_field('what_is_staking'); ?></a> 
                        <a href="#22"><?php the_field('rewards_schedule'); ?>  </a>  
                        <a href="#2"><?php the_field('becoming_a_validator'); ?>  </a>  
                        <a href="#3"> <?php the_field('faq_heading'); ?></a>  
                    </nav>
                </div>
                <div class="col-sm-9">
                    <div class="pagenav-section">                     
                        <section class="pagenav-wrapper" id="1"> 
                            <?php the_field('what_is_staking_content'); ?>
                        </section>
                        <section class="pagenav-wrapper" id="22"> 
                            <?php the_field('rewards_schedule_content'); ?>
                        </section>
                        <section class="pagenav-wrapper" id="2"> 
                            <?php the_field('becoming_a_validator_content'); ?>
                        </section>
                        <section class="pagenav-wrapper" id="3"> 
                            <?php the_field('faq_content'); ?>
                            <div class="faq-section">
                                <!--accordion-->
                                <ul id="accordions" class="accordions">
                                    <?php
                                    if (have_rows('frequently_asked_questions_section')):
                                      while (have_rows('frequently_asked_questions_section')) : the_row();
                                        ?> 
                                        <li>
                                            <div class="links"><?php the_sub_field('heading'); ?><i class="fa fa-chevron-down"></i></div>
                                            <ul class="accordion-contents">
                                                <li><?php the_sub_field('content'); ?></li>
                                            </ul>
                                        </li>
                                        <?php
                                      endwhile;
                                    else :
                                    endif;
                                    ?> 
                                </ul>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php
get_footer();

