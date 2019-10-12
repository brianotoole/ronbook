<!DOCTYPE html>

<html <?php language_attributes(); ?> data-wf-page="5d93b1aa23f45cb77536b8b6" data-wf-site="5d93b1aa23f45c2c9836b8b3" data-wf-status="1">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php wp_head(); ?>
</head>

<?php
// Custom Field Group == Site Options
$site_logo = get_field('site_logo', 'option');
?>

<body <?php body_class(); ?>>
<div class="loader">
  <img src="https://uploads-ssl.webflow.com/5d93b1aa23f45c2c9836b8b3/5d93b1aa23f45cdc6e36b902_loader.svg" alt=""/>
</div><!-- /.loader -->

<div class="page-content">

<div id="navigation" class="navigation-bar navigation-bar-overlay">
    <div class="container">
        <div class="navigation-wrapper">
            <a href="/" class="navigation-logo w-inline-block w--current">
             <img src="<?php echo $site_logo['url']; ?>"/>
            </a>
            <div class="navigation-items">
                <a href="<?php echo home_url(); ?>/contact" class="button button-transparent button-navigation u-visible-tablet w-inline-block">
                    <div>Contact</div>
                </a>
                <div class="navigation-additional-controls white"><img src="https://uploads-ssl.webflow.com/5d93b1aa23f45c2c9836b8b3/5d93b1aa23f45c7cb836b8ea_icon-search-white.svg" alt="" class="navigation-control search-toggle" /><img src="https://uploads-ssl.webflow.com/5d93b1aa23f45c2c9836b8b3/5d93b1aa23f45cd3f536b8e9_icon-menu-white.svg" alt="" class="navigation-control mobile-toggle" /></div>
                <ul class="navigation-menu w-list-unstyled">
                    <li class="navigation-menu-item"><a href="<?php echo home_url(); ?>/about" class="text-white nav-link">About</a></li>
                    <li class="navigation-menu-item"><a href="<?php echo home_url(); ?>/team" class="text-white nav-link">Team</a></li>
                    <li class="navigation-menu-item">
                        <div data-delay="0" class="w-dropdown">
                            <div class="navigation-dropdown-item-toggle text-white w-dropdown-toggle">
                                <div class="dropdown-icon w-icon-dropdown-toggle"></div>
                                <div>Practice Areas</div>
                            </div>
                            <nav class="dropdown-list w-dropdown-list">
                                <a href="<?php echo home_url(); ?>/practice-areas/lobbying" class="dropdown-link w-dropdown-link">Lobbying</a>
                                <a href="<?php echo home_url(); ?>/practice-areas/governmental-affairs" class="dropdown-link w-dropdown-link">Governmental Affairs</a>
                                <a href="<?php echo home_url(); ?>/practice-areas/procurement" class="dropdown-link w-dropdown-link">Procurement</a>
                                <a href="<?php echo home_url(); ?>/practice-areas/business-services" class="dropdown-link w-dropdown-link">Business Services</a>
                            </nav>
                        </div>
                    </li>
                    <li class="navigation-menu-item"><a href="<?php echo home_url(); ?>/testimonials" class="text-white nav-link">Testimonials</a></li>
                    <li class="navigation-menu-item"><a href="<?php echo home_url(); ?>/news" class="text-white nav-link">News</a></li>
                </ul>
            </div>
        </div>
    </div><!--/.navigation-wrapper-->

    <div class="search-modal">
        <div>
            <h3>Search:</h3>
            <form action="" class="search-form modal-search-form w-form">
                <input type="search" class="form-input form-input-white search-form-input w-input" autofocus="true" maxlength="256" name="s" placeholder="Enter keywords..." id="s" required="" />
                <input type="submit" value="Search" class="button button-secondary" />
            </form>
        </div>
        <img src="https://uploads-ssl.webflow.com/5d93b1aa23f45c2c9836b8b3/5d93b1aa23f45c1e0036b8ff_icon-cross.svg" data-w-id="e09a2430-14a2-de53-4221-16ee7e7c989c" alt="" class="modal-cross" />
    </div><!--/.search-modal-->
</div><!--/.navigation-bar-->



