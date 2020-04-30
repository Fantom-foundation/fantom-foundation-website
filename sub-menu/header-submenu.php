<div class="header-sec">
    <div class="container">
        <ul class="navRoot">
            <li class="navSection logo">
                <a class="item-home colorize" href="<?php
                if (is_single() || is_category() || is_archive() ) {
                  ?>/blog/<?php
                   } else {
                     echo '/';
                   }
                   ?>">
                       <?php
                       if (is_page(array(25, 296))) {
                         ?><img src="<?php echo get_template_directory_uri(); ?>/images/fantom_logo_white_new.svg" alt="Fantom Logo"/> <?php
                    } else {
                      echo '<img class="banner" src="' . get_template_directory_uri() . '/images/Fantom Logo.svg" alt="Fantom Logo">';
                    }
                    ?>
                </a>                          
            </li>
            <!--Main Menu Links-->
            <li class="navSection primary">
                <?php
                if (have_rows('theme_menu', 'option')):
                  while (have_rows('theme_menu', 'option')) : the_row();
                    ?>
                    <a class="rootLink  item-products hasDropdown colorize" 
                       href= <?php the_sub_field('link'); ?> " 
                       data-dropdown="<?php echo str_replace(' ', '-', strtolower(get_sub_field('main_menu_title'))); ?>">
                        <?php the_sub_field('main_menu_title'); ?> </a>
                    <?php
                  endwhile;
                else :
                endif;
                ?>
            </li>
            <li class="navSection secondary">
                <?php
                if ('page' == get_option('show_on_front') && is_front_page()) {
                  ?> <a class="rootLink item-support colorize fantom-wallte-btn" href="https://wallet.fantom.network/" target="_blank">Fantom Wallet</a> <?php
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
            <?php
            if (have_rows('theme_menu', 'option')):
              $rightmenu = true;
              while (have_rows('theme_menu', 'option')) : the_row();
                $title = get_sub_field('main_menu_title');
                ?>
                <?php
                // Two Column Menu
                if (!get_sub_field('single_line_menu')) {
                  ?>
                  <div class="dropdownSection left <?php if ($title == 'Tools') { ?> active sec-fold-section
                       <?php } ?>" data-dropdown="<?php echo str_replace(' ', '-', strtolower($title)); ?>">
                      <div class="dropdownContent">
                          <div class="linkGroup products-link fold-wrapper ">
                              <ul class="productsGroup">
                                  <li class="first-fold-group">
                                      <ul >
                                          <?php
                                          if (have_rows('menu_items_left_sections', 'option')):
                                            while (have_rows('menu_items_left_sections', 'option')) : the_row();
                                              ?>
                                              <?php
                                              if (have_rows('section_heading', 'option')):
                                                while (have_rows('section_heading', 'option')) : the_row();
                                                  ?>
                                                  <?php if (get_sub_field('section_headings')) { ?><h4><?php the_sub_field('section_headings') ?></h4> <?php } ?>
                                                  <ul>
                                                      <?php
                                                      if (have_rows('menu_items', 'option')):
                                                        while (have_rows('menu_items', 'option')) : the_row();
                                                          ?>
                                                          <li>
                                                              <a  
                                                                  class="linkContainer item-radar" <?php if (get_sub_field('external_link')) { ?>
                                                                    target="_blank" <?php } ?> 
                                                                  href="<?php the_sub_field('link') ?>"
                                                                  >
                                                                  <img class="sub-menu-img" src="<?php the_sub_field('image') ?>" alt="Sub menu"> 
                                                                  <div class="productLinkContent">
                                                                      <h3 class="linkTitle"><?php the_sub_field('item_title') ?></h3>
                                                                      <p class="linkSub"><?php the_sub_field('item_description') ?></p>
                                                                  </div>
                                                              </a>
                                                          </li>
                                                          <?php
                                                        endwhile;
                                                      else :
                                                      endif;
                                                      ?>
                                                  </ul>
                                                  <?php
                                                endwhile;
                                              else :
                                              endif;
                                              ?>
                                              <?php
                                            endwhile;
                                          else :
                                          endif;
                                          ?>

                                      </ul>
                                  </li> 
                                  <li class="sec-fold-group">
                                      <ul>
                                          <?php
                                          if (have_rows('menu_items_right_sections', 'option')):
                                            while (have_rows('menu_items_right_sections', 'option')) : the_row();
                                              ?>
                                              <?php
                                              if (have_rows('section_heading', 'option')):
                                                while (have_rows('section_heading', 'option')) : the_row();
                                                  ?>
                                                  <?php if (get_sub_field('section_headings')) { ?>
                                                    <h4><?php the_sub_field('section_headings') ?></h4> 
                                                  <?php } ?>
                                                  <ul>
                                                      <?php
                                                      if (have_rows('menu_items', 'option')):
                                                        while (have_rows('menu_items', 'option')) : the_row();
                                                          ?>
                                                          <li>

                                                              <?php if (!(get_sub_field('image')) && !(get_sub_field('item_description'))) { ?>  
                                                                <a  
                                                                    class="linkContainer-wrapper" <?php if (get_sub_field('external_link')) { ?>
                                                                      target="_blank" <?php } ?> 
                                                                    href="<?php the_sub_field('link') ?>"
                                                                    >
                                                                    <p ><?php the_sub_field('item_title') ?></p>
                                                                </a> 

                                                              <?php } else { ?>
                                                                <a  
                                                                    class="linkContainer item-radar" <?php if (get_sub_field('external_link')) { ?>
                                                                      target="_blank" <?php } ?> 
                                                                    href="<?php the_sub_field('link') ?>"
                                                                    >
                                                                        <?php if (get_sub_field('image')) { ?>
                                                                      <img class="sub-menu-img" src="<?php the_sub_field('image') ?>" alt="Sub menu"> <?php } ?>
                                                                    <div class="productLinkContent">
                                                                        <h3 class="linkTitle"><?php the_sub_field('item_title') ?></h3>
                                                                        <p class="linkSub"><?php the_sub_field('item_description') ?></p>
                                                                    </div>
                                                                </a>
                                                              <?php }
                                                              ?>


                                                          </li>
                                                          <?php
                                                        endwhile;
                                                      else :
                                                      endif;
                                                      ?>
                                                  </ul>
                                                  <?php
                                                endwhile;
                                              else :
                                              endif;
                                              ?>
                                              <?php
                                            endwhile;
                                          else :
                                          endif;
                                          ?>
                                      </ul>
                                  </li>  
                              </ul>
                          </div> 
                      </div>
                  </div>

                  <?php
                } else {
                  // One Column Menu
                  ?>
                  <div class="dropdownSection right <?php echo str_replace(' ', '-', strtolower($title)); ?>-section"
                       data-dropdown="<?php echo str_replace(' ', '-', strtolower($title)); ?>">
                      <div class="dropdownContent <?php echo str_replace(' ', '-', strtolower($title)); ?>-content">
                          <ul class="linkGroup linkList companyGroup">         
                              <?php
                              if (have_rows('menu_items_left_sections', 'option')):
                                while (have_rows('menu_items_left_sections', 'option')) : the_row();
                                  ?>
                                  <?php
                                  if (have_rows('section_heading', 'option')):
                                    while (have_rows('section_heading', 'option')) : the_row();
                                      ?>
                                      <?php if (get_sub_field('section_headings')) { ?><h4><?php the_sub_field('section_headings') ?></h4> <?php } ?>
                                      <ul>
                                          <?php
                                          if (have_rows('menu_items', 'option')):
                                            while (have_rows('menu_items', 'option')) : the_row();
                                              ?>
                                              <li class="team-sec-wrapper">
                                                  <?php if (!(get_sub_field('image')) && !(get_sub_field('item_description'))) { ?>  
                                                    <a  class="linkContainer-wrapper" <?php if (get_sub_field('external_link')) { ?>
                                                          target="_blank" <?php } ?> 
                                                        href="<?php the_sub_field('link') ?>"
                                                        >
                                                        <p><?php the_sub_field('item_title') ?></p>
                                                    </a> 
                                                  <?php } else { ?>
                                                    <a  
                                                        class="linkContainer item-radar" <?php if (get_sub_field('external_link')) { ?>
                                                          target="_blank" <?php } ?> 
                                                        href="<?php the_sub_field('link') ?>"
                                                        >
                                                            <?php if (get_sub_field('image')) { ?>
                                                          <img class="sub-menu-img" src="<?php the_sub_field('image') ?>" alt="Sub menu"> <?php } ?>
                                                        <div class="productLinkContent">
                                                            <h3 class="linkTitle"><?php the_sub_field('item_title') ?></h3>
                                                            <p class="linkSub"><?php the_sub_field('item_description') ?></p>
                                                        </div>
                                                    </a>
                                                  <?php }
                                                  ?>
                                              </li>
                                              <?php
                                            endwhile;
                                          else :
                                          endif;
                                          ?>
                                      </ul>
                                      <?php
                                    endwhile;
                                  else :
                                  endif;
                                  ?>
                                  <?php
                                endwhile;
                              else :
                              endif;
                              ?>

                          </ul>                      
                      </div>
                  </div>
                <?php }
                ?>
                <?php
              endwhile;
            else :
            endif;
            ?>
        </div>
    </div>
</div>