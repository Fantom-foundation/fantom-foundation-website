<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="HandheldFriendly" content="true">
        <?php if (is_home() || is_front_page()) { ?>
          <title><?php echo get_bloginfo('name'); ?></title>
        <?php } else { ?>
          <title><?php the_title(); ?> | <?php echo get_bloginfo('name'); ?></title>
          <?php
        }
        wp_enqueue_script('jquery')
        ?>

        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>

        <!--animation header-->

        <header class="globalNav noDropdownTransition">
            <div class="header-sec">
                <div class="container">
                    <ul class="navRoot">
                        <li class="navSection logo">
                            <a class="item-home colorize" href="/">
                                <?php
                                if ('page' == get_option('show_on_front') && is_front_page()) {
                                  ?><img src="<?php echo get_template_directory_uri(); ?>/images/fantom_logo_white_new.svg" alt="Fantom Logo"/> <?php
                                } else {
                                  echo '<img class="banner" src="' . get_template_directory_uri() . '/images/Fantom Logo.svg" alt="Banner 1">';
                                }
                                ?>
                            </a>                          
                        </li>
                        <li class="navSection primary">
                            <a class="rootLink item-products hasDropdown colorize" href="#" data-dropdown="technology">
                                Technology
                            </a>
                            <a class="rootLink item-developers hasDropdown colorize" href="#" data-dropdown="tools">
                                Tools
                            </a>
                            <a class="rootLink item-company hasDropdown colorize" href="#" data-dropdown="ecosystem">
                                Ecosystem
                            </a>
                            <a class="rootLink item-company hasDropdown colorize" href="#" data-dropdown="developers">
                                Developers
                            </a>
                        </li>
                        <li class="navSection secondary">
                            <?php
                            if ('page' == get_option('show_on_front') && is_front_page()) {
                              ?> <a class="rootLink item-support colorize fantom-wallte-btn" href="/fantom-wallet/">FantomWallet</a> <?php
                            } else {
                              echo '  <a class="rootLink item-support colorize fantom-wallte-btn get-start-btn" href="/get-started/">Get Started</a>';
                            }
                            ?>
                        </li>                      
                    </ul>
                </div>
                
                <!--ttttttttttt-->
                
                
                <?php dynamic_sidebar('header-menu'); ?>
                
            </div>
        </header>

        <!--mobile header-->
        <header class="mobile-row-sec-wrapper">
            <div class="mobile-menu-sec">
                <div class="mobile-show-container">
                    <div class="mobile-show">
                        <div class="mobile-logo-icon-wrapper">
                            <a class="item-home colorize" href="/">
                                <?php
                                if ('page' == get_option('show_on_front') && is_front_page()) {
                                  ?><img  class="mobile-header-logo" src="<?php echo get_template_directory_uri(); ?>/images/fantom_logo_white_new.svg" alt="Fantom Logo"/> <?php
                                } else {
                                  echo '<img class="mobile-header-logo" src="' . get_template_directory_uri() . '/images/Fantom Logo.svg" alt="Banner 1">';
                                }
                                ?>
                            </a> 
                        </div>
                        <div class="menu-toggle">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                        <nav class="mobile-nav theme-menus d-flex align-items-center"> 
                            <div class="inner-menu container">
                                <div class="mobile-logo-icon-wrapper inner-logo">
                                    <a class="item-home colorize" href="/">
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/Fantom Logo.svg" alt="Fantom Logo"/>                                      
                                    </a> 
                                </div>
                                <div class="mobile-menu-section">
                                    <div class="mobile-menu-content">
                                        <!--accordion-->
                                        <ul id="accordion" class="accordion">

                                            <li>
                                                <div class="link">  <a class="menu-page-link" href="#">Technology</a><i class="fa fa-chevron-down"></i></div>
                                                <ul class="accordion-content">
                                                    <li>  <ul class="productsGroup">
                                                            <li class="first-fold-group">
                                                                <ul>
                                                                    <li><a class="linkContainer item-payments" href="/intro-to-fantom/">
                                                                            <img class="sub-menu-img" src="<?php echo get_template_directory_uri(); ?>/images/Intro to Fantom.svg" alt="Sub menu">         
                                                                            <div class="productLinkContent">
                                                                                <h3 class="linkTitle">Intro to Fantom</h3>                                                          
                                                                            </div>
                                                                        </a></li> 
                                                                    <li><a class="linkContainer item-connect" href="/stake/"> 
                                                                            <img class="sub-menu-img" src="<?php echo get_template_directory_uri(); ?>/images/Stake on Fantom.svg" alt="Sub menu"> 
                                                                            <div class="productLinkContent">
                                                                                <h3 class="linkTitle">Stake on Fantom</h3>
                                                                            </div>
                                                                        </a></li>
                                                                    <li><a class="linkContainer item-atlas" href="/ftm-token/">
                                                                            <img class="sub-menu-img" src="<?php echo get_template_directory_uri(); ?>/images/FTM token.svg" alt="Sub menu"> 
                                                                            <div class="productLinkContent">
                                                                                <h3 class="linkTitle">FTM token</h3>
                                                                            </div>
                                                                        </a></li>
                                                                    <!--<li><a class="linkContainer item-atlas" href="/defi-on-fantom/">
                                                                        <img class="sub-menu-img" src="<?php //echo get_template_directory_uri();                              ?>/images/Fantom DeFi.svg" alt="Sub menu"> 
                                                                         <div class="productLinkContent">
                                                                         <h3 class="linkTitle">Fantom DeFi</h3>
                                                                          </div>
                                                                      </a></li>-->
                                                                </ul>
                                                            </li> 
                                                            <li class="sec-fold-group">
                                                                <ul>
                                                                    <li><a class="linkContainer item-subscriptions" href="#">
                                                                            <img class="sub-menu-img" src="<?php echo get_template_directory_uri(); ?>/images/The Consensus.svg" alt="Sub menu"> 
                                                                            <div class="productLinkContent">
                                                                                <h3 class="linkTitle">The Consensus</h3> 
                                                                            </div>
                                                                        </a></li> 
                                                                    <li><a class="linkContainer item-relay" href="/what-is-opera/">
                                                                            <img class="sub-menu-img" src="<?php echo get_template_directory_uri(); ?>/images/Opera chain.svg" alt="Sub menu"> 
                                                                            <div class="productLinkContent">
                                                                                <h3 class="linkTitle">Opera chain</h3>
                                                                            </div>
                                                                        </a></li>
                                                                    <li><a class="linkContainer item-radar" href="/xar-network-banking-on-dlt/">
                                                                            <img class="sub-menu-img" src="<?php echo get_template_directory_uri(); ?>/images/Xar network.svg" alt="Sub menu"> 
                                                                            <div class="productLinkContent">
                                                                                <h3 class="linkTitle">Xar network</h3>
                                                                            </div>
                                                                        </a></li> 
                                                                </ul>
                                                            </li>  
                                                        </ul></li>
                                                </ul>
                                            </li>
                                            <!--Tools-->
                                            <li>
                                                <div class="link">  <a class="menu-page-link" href="#">Tools</a><i class="fa fa-chevron-down"></i></div>
                                                <ul class="accordion-content">
                                                    <li><ul class="linkGroup linkList companyGroup fold-wrapper">
                                                            <li class="first-fold-group">
                                                                <h4>WALLET</h4>
                                                                <ul class="wallet-container">
                                                                    <li><a class="linkContainer item-radar" href="/fantom-wallet/">
                                                                            <img class="sub-menu-img" src="<?php echo get_template_directory_uri(); ?>/images/FantomWallet.svg" alt="Sub menu"> 
                                                                            <div class="productLinkContent">
                                                                                <h3 class="linkTitle">FantomWallet</h3>
                                                                            </div></a>
                                                                    </li>
                                                                </ul>
                                                                <h4 class="explorers-text">EXPLORERS</h4>
                                                                <ul class="wallet-container">
                                                                    <li><a class="linkContainer item-radar" href="https://explorer.fantom.network/" target="_blank" >
                                                                            <img class="sub-menu-img" src="<?php echo get_template_directory_uri(); ?>/images/Opera Explorer.svg" alt="Sub menu"> 
                                                                            <div class="productLinkContent">                                            
                                                                                <h3 class="linkTitle">Opera Explorer</h3>
                                                                            </div></a>
                                                                    </li>
                                                                    <li><a class="linkContainer item-radar" href="https://explorer.xar.network/" target="_blank" >
                                                                            <img class="sub-menu-img" src="<?php echo get_template_directory_uri(); ?>/images/Xar Explorer.svg" alt="Sub menu"> 
                                                                            <div class="productLinkContent">
                                                                                <h3 class="linkTitle">Xar Explorer</h3>
                                                                            </div></a>
                                                                    </li>
                                                                </ul>
                                                            </li>

                                                            <li class="sec-fold-group">
                                                                <h4>GUIDES</h4>
                                                                <a class="linkContainer-wrapper" href="/how-to-use-fantom-wallet/"><p>How to use Fantom Wallet</p></a> 
                                                                <a class="linkContainer-wrapper" href="/how-to-use-fantom-bridge/"><p>Swap FTM with the Bridge</p></a>
                                                                <a class="linkContainer-wrapper" href="/how-to-set-up-a-validator-node-on-fantom/"><p>How to set up a validator node on Fantom</p></a>
                                                            </li>
                                                        </ul></li>
                                                </ul>
                                            </li>
                                            <!--Ecosystem-->
                                            <li>
                                                <div class="link">  <a class="menu-page-link" href="#">Ecosystem</a><i class="fa fa-chevron-down"></i></div>
                                                <ul class="accordion-content">
                                                    <li> <ul class="linkGroup linkList companyGroup">                             
                                                            <li class="team-sec-wrapper"><a class="linkContainer item-radar" href="/team/">
                                                                    <img class="sub-menu-img" src="<?php echo get_template_directory_uri(); ?>/images/Team.svg" alt="Sub menu"> 
                                                                    <div class="productLinkContent">
                                                                        <h3 class="linkTitle">Team</h3>
                                                                    </div></a>
                                                            </li>
                                                            <li><a class="linkContainer item-radar" href="/roadmap/">
                                                                    <img class="sub-menu-img" src="<?php echo get_template_directory_uri(); ?>/images/Roadmap.svg" alt="Sub menu"> 
                                                                    <div class="productLinkContent">
                                                                        <h3 class="linkTitle">Roadmap</h3>
                                                                    </div></a>
                                                            </li>
                                                            <li><a class="linkContainer item-radar" href="/blog/">
                                                                    <img class="sub-menu-img" src="<?php echo get_template_directory_uri(); ?>/images/Blog.svg" alt="Sub menu"> 
                                                                    <div class="productLinkContent">
                                                                        <h3 class="linkTitle">Blog</h3>
                                                                    </div></a>
                                                            </li>
                                                            <li><a class="linkContainer item-radar" href="/frequently-asked-questions/">
                                                                    <img class="sub-menu-img" src="<?php echo get_template_directory_uri(); ?>/images/FAQ.svg" alt="Sub menu"> 
                                                                    <div class="productLinkContent">
                                                                        <h3 class="linkTitle">FAQ</h3>
                                                                    </div></a>
                                                            </li>
                                                            <li><a class="linkContainer item-radar" href="/join-the-fantom-community/">
                                                                    <img class="sub-menu-img" src="<?php echo get_template_directory_uri(); ?>/images/Community.svg" alt="Sub menu"> 
                                                                    <div class="productLinkContent">
                                                                        <h3 class="linkTitle">Community</h3>
                                                                    </div></a>
                                                            </li>
                                                        </ul> </li>
                                                </ul>
                                            </li>
                                            <!--Developers-->
                                            <li>
                                                <div class="link">  <a class="menu-page-link" href="#">Developers</a><i class="fa fa-chevron-down"></i></div>
                                                <ul class="accordion-content">
                                                    <li><ul class="linkGroup linkList companyGroup">                               
                                                            <li><a class="linkContainer item-radar" href="https://github.com/Fantom-foundation/go-lachesis/wiki" target="_blank" >
                                                                    <img class="sub-menu-img" src="<?php echo get_template_directory_uri(); ?>/images/Documentation.svg" alt="Sub menu"> 
                                                                    <div class="productLinkContent">
                                                                        <h3 class="linkTitle">Documentation</h3>
                                                                    </div></a>
                                                            </li>
                                                            <li><a class="linkContainer item-radar" href="https://github.com/Fantom-foundation/go-lachesis/wiki/Technical-Papers" target="_blank" >
                                                                    <img class="sub-menu-img" src="<?php echo get_template_directory_uri(); ?>/images/Technical papers.svg" alt="Sub menu"> 
                                                                    <div class="productLinkContent">
                                                                        <h3 class="linkTitle">Technical papers</h3>
                                                                    </div></a>
                                                            </li>                                
                                                        </ul> </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>                                 
                                </div>                              
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </header>








