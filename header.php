<!DOCTYPE html>

<html <?php language_attributes(); ?> data-wf-page="5d93b1aa23f45cb77536b8b6" data-wf-site="5d93b1aa23f45c2c9836b8b3" data-wf-status="1">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php wp_head(); ?>
</head>

<?php
// Custom Field Group == Site Options
// $site_logo = get_field('site_logo', 'option');
?>

<body <?php body_class(); ?>>
<div class="loader"><img src="https://uploads-ssl.webflow.com/5d93b1aa23f45c2c9836b8b3/5d93b1aa23f45cdc6e36b902_loader.svg" alt=""/></div>

<div class="page-content">

<div id="navigation" class="navigation-bar navigation-bar-overlay">
    <div class="container">
        <div class="navigation-wrapper">
            <a href="/" class="w-inline-block w--current">
                <img src="https://uploads-ssl.webflow.com/5d93b1aa23f45c2c9836b8b3/5d93b1aa23f45c601a36b8e3_logo-white.svg" alt="" /></a>
            <div class="navigation-items">
                <a href="/contact" class="button navigation-button w-inline-block">
                    <div>Contact</div>
                </a>
                <div class="navigation-additional-controls white"><img src="https://uploads-ssl.webflow.com/5d93b1aa23f45c2c9836b8b3/5d93b1aa23f45c7cb836b8ea_icon-search-white.svg" alt="" class="navigation-control search-toggle" /><img src="https://uploads-ssl.webflow.com/5d93b1aa23f45c2c9836b8b3/5d93b1aa23f45cd3f536b8e9_icon-menu-white.svg" alt="" class="navigation-control mobile-toggle" /></div>
                <ul class="navigation-menu w-list-unstyled">
                    <li class="navigation-menu-item">
                        <div data-delay="0" class="w-dropdown">
                            <div class="navigation-dropdown-item-toggle text-white w-dropdown-toggle">
                                <div class="dropdown-icon w-icon-dropdown-toggle"></div>
                                <div>Pages</div>
                            </div>
                            <nav class="dropdown-list w-dropdown-list"><a href="/about" class="dropdown-link w-dropdown-link">About Company</a><a href="/team" class="dropdown-link w-dropdown-link">Our Team</a><a href="/services" class="dropdown-link w-dropdown-link">Services</a><a href="/careers" class="dropdown-link w-dropdown-link">Careers</a><a href="/contact" class="dropdown-link w-dropdown-link">Get In Touch</a></nav>
                        </div>
                    </li>
                    <li class="navigation-menu-item"><a href="/case-studies" class="text-white nav-link">About</a></li>
                    <li class="navigation-menu-item"><a href="/blog" class="text-white nav-link">Testimonials</a></li>
                    <li class="navigation-menu-item">
                        <div data-delay="0" class="w-dropdown">
                            <div class="navigation-dropdown-item-toggle text-white w-dropdown-toggle">
                                <div class="dropdown-icon w-icon-dropdown-toggle"></div>
                                <div>Template</div>
                            </div>
                            <nav class="dropdown-list w-dropdown-list"><a href="/style-guide" class="dropdown-link w-dropdown-link">Style Guide</a><a href="#" class="dropdown-link w-dropdown-link">Image License</a></nav>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div><!--/.navigation-wrapper-->

    <div class="search-modal">
        <div>
            <h3>Search the site</h3>
            <form action="/search" class="search-form modal-search-form w-form">
                <input type="search" class="form-input form-input-white search-form-input w-input" autofocus="true" maxlength="256" name="query" placeholder="Enter keywords" id="search" required="" />
                <input type="submit" value="Search" class="button w-button" />
            </form>
        </div>
        <img src="https://uploads-ssl.webflow.com/5d93b1aa23f45c2c9836b8b3/5d93b1aa23f45c1e0036b8ff_icon-cross.svg" data-w-id="e09a2430-14a2-de53-4221-16ee7e7c989c" alt="" class="modal-cross" />
    </div><!--/.search-modal-->
</div><!--/.navigation-bar-->



