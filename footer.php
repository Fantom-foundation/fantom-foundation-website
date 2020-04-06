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
                    <div class="test">

                    </div>
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
                        <ul class="social-icon-section">                           
                            <li><a href="https://t.co/rUA9BE8kf2?amp=1" target="_blank" class="social-icon"><i class="fab fa-discord" aria-hidden="true"></i></a></li>
							 <li><a href="https://twitter.com/FantomFDN" target="_blank" class="social-icon"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="https://www.reddit.com/r/FantomFoundation/" target="_blank" class="social-icon"><i class="fab fa-reddit-alien" aria-hidden="true"></i></a></li>                       
                        </ul>
                    </div>
                    <div class="copyright-wrapper page-link-section">
                        <ul class="copyright-page-link-wrapper">
                            <li><a href="#" target="_blank" class="copyright-page-link">Language: EN</a></li>
                            <li><a href="#" target="_blank" class="copyright-page-link">Privacy Policy</a></li>
                            <li><a href="#" target="_blank" class="copyright-page-link">Terms of Service</a></li>                       
                        </ul>
                    </div>
                </div>
                </div>
            </div>   
     
    </div>
</footer>
<?php wp_footer(); ?>

</body>
</html>



<!--<div class="sub-menu">
<a class="stake-now-btn" href="#"></a>
<p></p>
</div>-->