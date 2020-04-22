<?php
header("HTTP/1.0 404 Not Found");
?>
<?php
/*
 * Template Name: 404 Page
 */
get_header();
?>
<div id="primary" class="content-area">
        <div id="content" class="site-content" role="main">
 
            <header class="page-header">
                <h1 class="page-title"><?php _e( 'Not Found', 'fantom-web' ); ?></h1>
            </header>
 
            <div class="page-wrapper">
                <div class="page-content">
                    <h2><?php _e( 'This is somewhat embarrassing, isn’t it?', 'fantom-web' ); ?></h2>
                    <p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'fantom-web' ); ?></p>
                </div><!-- .page-content -->
            </div><!-- .page-wrapper -->
 
        </div><!-- #content -->
    </div><!-- #primary -->
<?php get_footer(); ?>

