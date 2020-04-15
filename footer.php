<footer>
    <div class="footer-section">
        <div class="container">
            <div class="row footer-row">
                <div class="col-sm-4">
                    <div class="logo">
                        <a href="/"> <img src="<?php echo get_template_directory_uri(); ?>/images/fantom_logo_white_new.svg" alt="Fantom Logo"/></a> 
                    </div>
                    <p>Subscribe for the latest updates</p>
                    <?php echo do_shortcode('[mc4wp_form id="34"]') ?>
                </div>
                <div class="col-sm-8">
                    <nav class="site-nav"> 
                        <?php
                        $args = array(
                            'theme_location' => 'footer',
                            'sub_menu' => true,
                        );
                        ?>          
                        <?php wp_nav_menu($args); ?>
                    </nav>
                </div>
            </div>
        </div>
        <div class="copyright-wrapper-section">
            <div class="container">
                <div class="copyright-section">
                    <div class="copyright-wrapper copyright-sec-wrapper">
                        <p>© <?php echo date('Y'); ?> Fantom Foundation</p>
                    </div>       
                    <div class="copyright-wrapper social-icon-wrapper">
                        <?php dynamic_sidebar('footer1'); ?>
                    </div>
                    <div class="copyright-wrapper page-link-section">
                        <?php dynamic_sidebar('footer2'); ?>
                    </div>
                </div>
            </div>
        </div>   
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
