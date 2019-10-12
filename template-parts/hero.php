<?php // HERO

// Custom Field Group == Component: Hero
$hero_title = get_field('hero_title');
$hero_subtitle = get_field('hero_subtitle');
$hero_button = get_field('hero_button');
$hero_bg = get_the_post_thumbnail_url();
// get slug name via post_name property
$slug_name = get_post_field('post_name', get_post());
?>

<!-- HERO -->
<div class="hero-section">
  <div class="bg-image-container">
    <div class="bg-image" style="background-image:url('<?php echo $hero_bg; ?>');"></div>
  </div><!-- /.hero-section -->
  <div class="hero-container">
    <div class="hero-content-container">
      <h1 class="hero-title"><?php echo $hero_title; ?></h1>
      <h4 class="hero-subtitle"><?php echo $hero_subtitle; ?></h4>
    </div><!-- /.hero-content-container -->
  </div><!-- /.hero-container -->
  <div class="container">
    <a href="#First-Section" class="hero-next-button w-inline-block"><img src="https://uploads-ssl.webflow.com/5d93b1aa23f45c2c9836b8b3/5d93b1aa23f45c76fb36b8db_icon-arrow-down.svg" alt="" /></a>
  </div><!-- /.container -->
  <div data-w-id="eb932dbb-19c7-a38e-6f4a-e8d79560b11f" class="decoration ring home-hero-ring"></div>
</div><!--/.hero-section-->
