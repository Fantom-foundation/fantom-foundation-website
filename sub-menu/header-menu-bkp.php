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
        <link href="https://fonts.googleapis.com/css?family=Oxygen&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
        <link rel="stylesheet" href="https://use.typekit.net/evf2xmx.css">


        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>
        <!--        <header>
                    <div class="header-section-wrapper">
                        <div class="header-sec">
                            <div class="container">
                                <div class="row header-row">
                                    <div class="col-sm-3">
                                        <div class="logo">
                                            <a href="/"> <img src="<?php //echo get_template_directory_uri();                  ?>/images/fantom_logo_white_new.svg" alt="Fantom Logo"/></a> 
                                        </div>
                                    </div>
                                    <div class="col-sm-7">
                                        <nav class="site-nav"> 
        <?php
        //$args = array(
        //'theme_location' => 'primary',
        //'sub_menu' => true,
        // );
        ?>          
        <?php //wp_nav_menu($args); ?>
                                        </nav>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="header-btn-sec">
                                            <a class="fantom-wallte-btn" href="#">FantomWallet</a> 
                                        </div>
                                    </div>
                                </div>
                                <div class="row banner-row">
                                    <div class="col-sm-5">
                                        <div class="banner-content">
                                            <h1>Made for DeFi</h1>
                                            <p>Unlock the next wava of DeFi solution with Fantom.</p>
                                            <a class="get-started-btn" href="#">Get Started</a> 
                                        </div>
                                    </div>
                                    <div class="col-sm-7">
                                        <img src="http://localhost/fantom-web/wp-content/uploads/2020/03/fantom_finance_hero.jpg"  class="image-wrapper" alt="Header Image"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
        
        
                </header>-->



        <!--animation header-->

        <header class="globalNav noDropdownTransition">
            <div class="header-wrapper">
                <div class="container">
                    <ul class="navRoot">
                        <li class="navSection logo">
                            <a class="item-home colorize" href="/"><img src="<?php echo get_template_directory_uri(); ?>/images/Fantom Logo.svg" alt="Fantom Logo"/></a>
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
                            <a class="rootLink item-support colorize fantom-wallte-btn" href="#">Get Started</a>

                        </li>
                        <!-- <li class="navSection mobile">
                            <a class="rootLink item-mobileMenu colorize"><h2>Menu</h2></a>
                            <div class="popup">
                                <div class="popupContainer">
                                    <a class="popupCloseButton">Close</a>
                                    <div class="mobileProducts">
                                        <h4>Products</h4>
                                        <div class="mobileProductsList">
                                            <ul>
                                                <li><a class="linkContainer item-payments" href="#">
                                                        Payments
                                                    </a></li>
                                                <li><a class="linkContainer item-subscriptions" href="#">
                                                        Subscriptions
                                                    </a></li>
                                                <li><a class="linkContainer item-connect" href="#">
                                                        Connect
                                                    </a></li>
                                            </ul>
                                            <ul>
                                                <li><a class="linkContainer item-relay" href="#">
                                                        Relay
                                                    </a></li>
                                                <li><a class="linkContainer item-atlas" href="#">
                                                        Atlas
                                                    </a></li>
                                                <li><a class="linkContainer item-radar" href="#">
                                                        Radar
                                                        <span class="new-badge">New</span>
                                                    </a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="mobileSecondaryNav">
                                        <ul>
                                            <li>
                                                <a class="item-pricing" href="#" data-analytics-action="pricing" data-action-source="mobile-nav">
                                                    Pricing
                                                </a>
                                            </li>
                                            <li><a class="item-workswith" href="#">Works with Stripe</a></li>
                                            <li><a class="item-gallery" href="#">Customers</a></li>
                                            <li><a class="item-documentation" href="#">Documentation</a></li>
                                        </ul>
                                        <ul>
                                            <li><a class="item-about" href="#">About Stripe</a></li>
                                            <li><a class="item-jobs" href="#">Jobs</a></li>
                                            <li><a class="item-blog" href="#">Blog</a></li>
                                        </ul>
                                    </div>
                                    <a class="mobileSignIn" data-adroll-segment="submit_two" href="#">Sign in</a>
                                </div>
                            </div>
                        </li>-->
                    </ul>
                </div>
                <div class="dropdownRoot">
                    <div class="dropdownBackground" style="transform: translateX(452px) scaleX(0.707692) scaleY(1.1075);">
                        <div class="alternateBackground" style="transform: translateY(255.53px);"></div>
                    </div>
                    <div class="dropdownArrow" style="transform: translateX(636px) rotate(45deg);"></div>
                    <div class="dropdownContainer" style="transform: translateX(452px); width: 368px; height: 443px;">

                        <div class="dropdownSection left" data-dropdown="technology">
                            <div class="dropdownContent">

                                <div class="linkGroup products-link fold-wrapper">
                                    <ul class="productsGroup">
                                        <li class="first-fold-group">
                                            <ul>
                                                <li><a class="linkContainer item-payments" href="/intro-to-fantom/">
                                                        <img class="sub-menu-img" src="<?php echo get_template_directory_uri(); ?>/images/Intro to Fantom.svg" alt="Sub menu">         
                                                        <div class="productLinkContent">
                                                            <h3 class="linkTitle">Intro to Fantom</h3>
                                                            <p class="linkSub">Fantom is a fast, scalable and secure platform for digital assets.</p>
                                                        </div>
                                                    </a></li> 
                                                <li><a class="linkContainer item-connect" href="/stake/"> 
                                                        <img class="sub-menu-img" src="<?php echo get_template_directory_uri(); ?>/images/Stake on Fantom.svg" alt="Sub menu"> 
                                                        <div class="productLinkContent">
                                                            <h3 class="linkTitle">Stake on Fantom</h3>
                                                            <p class="linkSub">Earn rewards by securing the network.</p>
                                                        </div>
                                                    </a></li>
                                                <li><a class="linkContainer item-atlas" href="/defi-on-fantom/">
                                                        <img class="sub-menu-img" src="<?php echo get_template_directory_uri(); ?>/images/Fantom DeFi.svg" alt="Sub menu"> 
                                                        <div class="productLinkContent">
                                                            <h3 class="linkTitle">Fantom DeFi</h3>
                                                            <p class="linkSub">Buy, sell, lend, and borrow synthetic assets on Fantom.</p>
                                                        </div>
                                                    </a></li>
                                            </ul>
                                        </li> 
                                        <li class="sec-fold-group">
                                            <ul>
                                                <li><a class="linkContainer item-subscriptions" href="#">
                                                        <img class="sub-menu-img" src="<?php echo get_template_directory_uri(); ?>/images/The Consensus.svg" alt="Sub menu"> 
                                                        <div class="productLinkContent">
                                                            <h3 class="linkTitle">The Consensus</h3> 
                                                            <p class="linkSub">Discover Lachesis, Fantom’s ultra-fast consensus mechanism.</p>
                                                        </div>
                                                    </a></li> 
                                                <li><a class="linkContainer item-relay" href="#">
                                                        <img class="sub-menu-img" src="<?php echo get_template_directory_uri(); ?>/images/Opera chain.svg" alt="Sub menu"> 
                                                        <div class="productLinkContent">
                                                            <h3 class="linkTitle">Opera chain</h3>
                                                            <p class="linkSub">The Fantom mainnet, with staking and native DeFi built in.</p>
                                                        </div>
                                                    </a></li>
                                                <li><a class="linkContainer item-radar" href="#">
                                                        <img class="sub-menu-img" src="<?php echo get_template_directory_uri(); ?>/images/Xar network.svg" alt="Sub menu"> 
                                                        <div class="productLinkContent">
                                                            <h3 class="linkTitle">Xar network</h3>
                                                            <p class="linkSub">A fully-fledged DeFi toolbox for banks & financial institutions.</p>
                                                        </div>
                                                    </a></li> 
                                            </ul>
                                        </li>  
                                    </ul>
                                </div>

                            </div>
                        </div>

                        <div class="dropdownSection active sec-fold-section" data-dropdown="tools">
                            <div class="dropdownContent">

                                <ul class="linkGroup linkList companyGroup fold-wrapper">
                                    <li class="first-fold-group">
                                        <h4>WALLET</h4>
                                        <ul>
                                            <li><a class="linkContainer item-radar" href="#">
                                                    <img class="sub-menu-img" src="<?php echo get_template_directory_uri(); ?>/images/FantomWallet.svg" alt="Sub menu"> 
                                                    <div class="productLinkContent">
                                                        <h3 class="linkTitle">FantomWallet</h3>
                                                        <p class="linkSub">Access the web wallet or download the desktop and mobile wallets for Opera.</p>
                                                    </div></a>
                                            </li>
                                        </ul>
                                        <h4 class="explorers-text">EXPLORERS</h4>
                                        <ul>
                                            <li><a class="linkContainer item-radar" href="#">
                                                    <img class="sub-menu-img" src="<?php echo get_template_directory_uri(); ?>/images/Opera Explorer.svg" alt="Sub menu"> 
                                                    <div class="productLinkContent">                                            
                                                        <h3 class="linkTitle">Opera Explorer</h3>
                                                        <p class="linkSub">Explore the network transations, blocks, and nodes on Opera.</p>
                                                    </div></a>
                                            </li>
                                            <li><a class="linkContainer item-radar" href="#">
                                                    <img class="sub-menu-img" src="<?php echo get_template_directory_uri(); ?>/images/Xar Explorer.svg" alt="Sub menu"> 
                                                    <div class="productLinkContent">
                                                        <h3 class="linkTitle">Xar Explorer</h3>
                                                        <p class="linkSub">Explore the network transations, blocks, and nodes on Xar.</p>
                                                    </div></a>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class="sec-fold-group">
                                        <h4>GUIDES</h4>
                                        <p>How to use Fantom Wallet</p>
                                        <p>Swap FTM with the Bridge</p>
                                    </li>
                                </ul>                      
                            </div>
                        </div>

                        <div class="dropdownSection right ecosystem-section" data-dropdown="ecosystem">
                            <div class="dropdownContent ecosystem-content">

                                <ul class="linkGroup linkList companyGroup">                             
                                    <li class="team-sec-wrapper"><a class="linkContainer item-radar" href="/team/">
                                            <img class="sub-menu-img" src="<?php echo get_template_directory_uri(); ?>/images/Team.svg" alt="Sub menu"> 
                                            <div class="productLinkContent">
                                                <h3 class="linkTitle">Team</h3>
                                                <p class="linkSub">Meet the people behind Fantom.</p>
                                            </div></a>
                                    </li>
                                    <li><a class="linkContainer item-radar" href="/roadmap/">
                                            <img class="sub-menu-img" src="<?php echo get_template_directory_uri(); ?>/images/Roadmap.svg" alt="Sub menu"> 
                                            <div class="productLinkContent">
                                                <h3 class="linkTitle">Roadmap</h3>
                                                <p class="linkSub">Keep up to date with our progress and discover what’s coming.</p>
                                            </div></a>
                                    </li>
                                    <li><a class="linkContainer item-radar" href="#">
                                            <img class="sub-menu-img" src="<?php echo get_template_directory_uri(); ?>/images/Blog.svg" alt="Sub menu"> 
                                            <div class="productLinkContent">
                                                <h3 class="linkTitle">Blog</h3>
                                                <p class="linkSub">Learn about Fantom through our general and tech articles.</p>
                                            </div></a>
                                    </li>
                                    <li><a class="linkContainer item-radar" href="#">
                                            <img class="sub-menu-img" src="<?php echo get_template_directory_uri(); ?>/images/FAQ.svg" alt="Sub menu"> 
                                            <div class="productLinkContent">
                                                <h3 class="linkTitle">FAQ</h3>
                                                <p class="linkSub">Do you have questions? We probably have answers!</p>
                                            </div></a>
                                    </li>
                                    <li><a class="linkContainer item-radar" href="#">
                                            <img class="sub-menu-img" src="<?php echo get_template_directory_uri(); ?>/images/Community.svg" alt="Sub menu"> 
                                            <div class="productLinkContent">
                                                <h3 class="linkTitle">Community</h3>
                                                <p class="linkSub">Join our wonderful community and share ideas.</p>
                                            </div></a>
                                    </li>
                                </ul>                      
                            </div>
                        </div>

                        <div class="dropdownSection right developers-section" data-dropdown="developers">
                            <div class="dropdownContent">

                                <ul class="linkGroup linkList companyGroup">                               
                                    <li><a class="linkContainer item-radar" href="#">
                                            <img class="sub-menu-img" src="<?php echo get_template_directory_uri(); ?>/images/Documentation.svg" alt="Sub menu"> 
                                            <div class="productLinkContent">
                                                <h3 class="linkTitle">Documentation</h3>
                                                <p class="linkSub">Our extensive documentation will guide you when building on Fantom.</p>
                                            </div></a>
                                    </li>
                                    <li><a class="linkContainer item-radar" href="#">
                                            <img class="sub-menu-img" src="<?php echo get_template_directory_uri(); ?>/images/Technical papers.svg" alt="Sub menu"> 
                                            <div class="productLinkContent">
                                                <h3 class="linkTitle">Technical papers</h3>
                                                <p class="linkSub">Read our technical papers and latest research essays.</p>
                                            </div></a>
                                    </li>                                
                                </ul>                      
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>








