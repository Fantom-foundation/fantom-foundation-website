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

        <!--animation header-->

        <header class="globalNav noDropdownTransition">
            <div class="header-sec">
                <div class="container">
                    <ul class="navRoot">
                        <li class="navSection logo">
                            <a class="item-home colorize" href="/">
                                <?php
                                if ('page' == get_option('show_on_front') && is_front_page()) {
                                  //if ('page' == get_option('show_on_front') && is_front_page() && is_page_template('fantom-wallet.php'))  {
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
                                                <!--                                                <li><a class="linkContainer item-atlas" href="/defi-on-fantom/">
                                                                                                        <img class="sub-menu-img" src="<?php //echo get_template_directory_uri();                    ?>/images/Fantom DeFi.svg" alt="Sub menu"> 
                                                                                                        <div class="productLinkContent">
                                                                                                            <h3 class="linkTitle">Fantom DeFi</h3>
                                                                                                            <p class="linkSub">Buy, sell, lend, and borrow synthetic assets on Fantom.</p>
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
                                            <li><a class="linkContainer item-radar" href="/fantom-wallet/">
                                                    <img class="sub-menu-img" src="<?php echo get_template_directory_uri(); ?>/images/FantomWallet.svg" alt="Sub menu"> 
                                                    <div class="productLinkContent">
                                                        <h3 class="linkTitle">FantomWallet</h3>
                                                        <p class="linkSub">Access the web wallet or download the desktop and mobile wallets for Opera.</p>
                                                    </div></a>
                                            </li>
                                        </ul>
                                        <h4 class="explorers-text">EXPLORERS</h4>
                                        <ul>
                                            <li><a class="linkContainer item-radar" href="https://explorer.fantom.network/" target="_blank" >
                                                    <img class="sub-menu-img" src="<?php echo get_template_directory_uri(); ?>/images/Opera Explorer.svg" alt="Sub menu"> 
                                                    <div class="productLinkContent">                                            
                                                        <h3 class="linkTitle">Opera Explorer</h3>
                                                        <p class="linkSub">Explore the network transations, blocks, and nodes on Opera.</p>
                                                    </div></a>
                                            </li>
                                            <li><a class="linkContainer item-radar" href="https://explorer.xar.network/" target="_blank" >
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
                                    <li><a class="linkContainer item-radar" href="/join-the-fantom-community/">
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

        <!--mobile header-->
        <header class="mobile-row-sec-wrapper">
            <div class="mobile-menu-sec">
                <div class="mobile-show-container">
                    <div class="mobile-show">
                        <div class="mobile-logo-icon-wrapper">
                            <a class="item-home colorize" href="/">
                                <?php
                                if ('page' == get_option('show_on_front') && is_front_page()) {
                                  //if ('page' == get_option('show_on_front') && is_front_page() && is_page_template('fantom-wallet.php'))  {
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
                                                                    <!--                                                <li><a class="linkContainer item-atlas" href="/defi-on-fantom/">
                                                                                                                            <img class="sub-menu-img" src="<?php //echo get_template_directory_uri();                    ?>/images/Fantom DeFi.svg" alt="Sub menu"> 
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
                                                                    <li><a class="linkContainer item-relay" href="#">
                                                                            <img class="sub-menu-img" src="<?php echo get_template_directory_uri(); ?>/images/Opera chain.svg" alt="Sub menu"> 
                                                                            <div class="productLinkContent">
                                                                                <h3 class="linkTitle">Opera chain</h3>
                                                                            </div>
                                                                        </a></li>
                                                                    <li><a class="linkContainer item-radar" href="#">
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
                                            <!--222-->
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
                                                                <p>How to use Fantom Wallet</p>
                                                                <p>Swap FTM with the Bridge</p>
                                                            </li>
                                                        </ul></li>
                                                </ul>
                                            </li>
                                            <!--333-->
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
                                                            <li><a class="linkContainer item-radar" href="#">
                                                                    <img class="sub-menu-img" src="<?php echo get_template_directory_uri(); ?>/images/Blog.svg" alt="Sub menu"> 
                                                                    <div class="productLinkContent">
                                                                        <h3 class="linkTitle">Blog</h3>
                                                                    </div></a>
                                                            </li>
                                                            <li><a class="linkContainer item-radar" href="#">
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
                                            <!--444444-->
                                            <li>
                                                <div class="link">  <a class="menu-page-link" href="#">Developers</a><i class="fa fa-chevron-down"></i></div>
                                                <ul class="accordion-content">
                                                    <li><ul class="linkGroup linkList companyGroup">                               
                                                            <li><a class="linkContainer item-radar" href="#">
                                                                    <img class="sub-menu-img" src="<?php echo get_template_directory_uri(); ?>/images/Documentation.svg" alt="Sub menu"> 
                                                                    <div class="productLinkContent">
                                                                        <h3 class="linkTitle">Documentation</h3>
                                                                    </div></a>
                                                            </li>
                                                            <li><a class="linkContainer item-radar" href="#">
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








