<?php
header("HTTP/1.0 404 Not Found");
?>
<?php
/*
 * Template Name: 404 Page
 */
get_header();
?>
<div class="banner-wrapper-section">
    <div class="container">
        <div class="sub-menu-banner-content">
            <div id="primary" class="content-area">
                <div id="content" class="site-content not-found-content" role="main">
                    <h1 class="page-title"><?php _e('Page not found!', 'fantom-web'); ?></h1>
                    <p class="found-message"><?php _e('Sorry, but the page you were looking for could not be found.', 'fantom-web'); ?></p>
                    <p class="pagelink-wrapper"><?php _e('You can return to our <a href="/">home page</a>, or <a href="/get-started/">get started with Fantom</a>.', 'fantom-web'); ?></p>
                </div><!-- #content -->
            </div><!-- #primary -->
        </div>
    </div>      
</div>
<?php get_footer(); ?>

