<header >
    <div class="hotline-mobile hidden-md hidden-lg">
        <span><?php echo t('CÔNG TY CỔ PHẦN HÓA SINH VIỆT NAM')?></span>
    </div>  <div id="header">
        <div class="container">
            <div class="row">
                <div class="col-md-2 mobile-header column-logo">
                    <?php if ($logo): ?>
                        <div id="logo" class="">
                            <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>">
                                <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" /></a>
                        </div>
                    <?php endif; ?>
                    <div class="mobile-menu hidden-lg hidden-md  ">
                        <div class="mobile-control">
                            <div class="menu-btn">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </div>
                            <div class="search-icon">
                                <span class="glyphicon glyphicon-search"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 hidden-sm hidden-xs column-main-menu">
                    <nav id="navigation" class="clearfix" role="navigation">
                        <div id="main-menu">
                            <?php
                            if (module_exists('i18n_menu')) {
                                $main_menu_tree = i18n_menu_translated_tree(variable_get('menu_main_links_source', 'main-menu'));                        } else {
                                $main_menu_tree = menu_tree(variable_get('menu_main_links_source', 'main-menu'));
                            }                        print drupal_render($main_menu_tree);
                            ?>                    </div>                </nav><!-- end main-menu -->
                </div>            <div class="col-md-2 column-header-top">
                    <?php print render($page['header_top']); ?>
                </div>
            </div>
        </div>
    </div></header>
<?php print render($page['header']); ?>

<?php print $messages; ?>
<div class="clearfix">
</div>