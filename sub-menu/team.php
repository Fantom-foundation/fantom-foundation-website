<?php
/*
 * Template Name: Team Page
 */

get_header();
$feat_image = wp_get_attachment_url(get_post_thumbnail_id(get_the_id()));
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
                    <img src="<?php the_field('banner_image') ?>"  class="wrapper-image banner-image" alt="Header Image"/>
                </div>
            </div>                
        </div>
    </div>
    <div class="team-member-section">
        <div class="container">
            <div class="team-container">
                <h2><?php the_field('team_heading_wrapper') ?></h2>
                <div class="team-member-row">
                    <?php
                    if (have_rows('team_member')):
                      while (have_rows('team_member')) : the_row();
                        ?> 
                        <div class="team-member-col">
                            <img src="<?php the_sub_field('image'); ?>"  class="wrapper-image" alt="Team Member"/>
                            <h3><?php the_sub_field('name'); ?></h3>
                            <h4><?php the_sub_field('post'); ?></h4>
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
</main>
<?php get_footer(); ?>