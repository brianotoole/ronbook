<?php /* Template Name: About */

get_header();

get_template_part('template-parts/hero', '');


?>


<!-- INTRO -->
<div id="First-Section" class="section section-center-mobile intro first-section text-center">
    <div data-w-id="562ba68e-0ae8-5582-dbff-17f74b7d21e2" class="container container-narrow">
        <h2>Our History</h2>
        <div class="heading-underline"></div>
        <div class="heading-underline"></div>
        <p>Since our beginnings in 1984 in South Florida, our focus has never changed -- <strong>serve our clients with trust and integrity</strong>.</p>
        <p>Our team has one priority: getting the job done for our clients. We believe the best strategy is a reputation for going above and beyond. We have built reputation for becoming policy experts and for providing strategic direction that creates success for our clients.</p>
    </div>
    <div class="container about-company-quote">
      <div class="quote-with-image">
          <img src="https://uploads-ssl.webflow.com/5c53cbcc2a3fef233f40bd47/5c58e86c70ae492dca8b2247_about-1.jpg" srcset="https://uploads-ssl.webflow.com/5c53cbcc2a3fef233f40bd47/5c58e86c70ae492dca8b2247_about-1-p-500.jpeg 500w, https://uploads-ssl.webflow.com/5c53cbcc2a3fef233f40bd47/5c58e86c70ae492dca8b2247_about-1-p-800.jpeg 800w, https://uploads-ssl.webflow.com/5c53cbcc2a3fef233f40bd47/5c58e86c70ae492dca8b2247_about-1.jpg 974w" sizes="(max-width: 767px) 100vw, 487px" alt="" class="quote-author-image">
          <div class="quote-container">
            <blockquote>"Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries."</blockquote>
            <div class="quote-lower">
                <div class="quote-author-text-container">
                  <div class="quote-author-line"></div>
                  <div class="quote-author-text">
                      <h5 class="quote-author-heading">Ron Book</h5>
                      <div>President & CEO</div>
                  </div>
                </div>
            </div>
          </div>
      </div>
    </div><!-- /.container -->
    <div data-w-id="77549b59-a675-6031-e461-e93208aba3cd" class="section section-no-pad-btm container about-numbers">
      <div class="numbers__wrapper numbers__wrapper-horizontal">
        <div class="numbers__col numbers__col-stats">
          <div class="numbers__stat h2">50+</div>
          <div class="numbers__stat-text">Years of Experience</div>
        </div><!-- /.numbers__col -->
        <div class="numbers__col numbers__col-stats">
          <div class="numbers__stat h2">2 States</div>
          <div class="numbers__stat-text">Federal Relations</div>
        </div><!-- /.number__col -->
        <div class="numbers__col numbers__col-stats">
          <div class="numbers__stat h2">$100M+</div>
          <div class="numbers__stat-text">Managed Campaigns</div>
        </div><!-- /.number__col -->
      </div><!--/.numbers__wrapper-->
    </div><!-- .container.about-stats -->
</div>


<div class="section section-center-mobile bg-secondary faded">
  <div class="container container-narrow u-text-center">
    <h2>Our Team</h2>
    <div class="heading-underline"></div>
    <div class="heading-underline"></div>
    <h3 class="heading-main u-color-black">Our diverse team continues to lead the way in government affairs and lobbying services in Florida and beyond.</h3>
  </div><!-- /.container -->
  <div class="container">
      <?php get_template_part('template-parts/', 'team'); ?>
  </div><!-- /.container -->

</div><!-- /.section -->





<!-- AREAS OF PRACTICE -->
<div class="section section-center-mobile contained-section">
    <div data-w-id="562ba68e-0ae8-5582-dbff-17f74b7d21e2" class="container">

      <h5 class="heading-sub u-color-black">Areas of Practice</h5>
      <h2 class="heading-main u-color-black">How We Help</h2>

      <?php get_template_part('template-parts/accordion', ''); ?>

    </div><!--/.container-->
    <div data-w-id="eb932dbb-19c7-a38e-6f4a-e8d79560b11f" class="decoration ring testimonials-ring"></div>
</div><!--/.section-->






<!-- CASE STUDY -->
<div data-w-id="562ba68e-0ae8-5582-dbff-17f74b7d21e2" class="section-center-mobile feat-case-study u-border-btm-light bg-primary">
  <div class="feat-case-study__col feat-case-study__col--image">  
  </div><!--/.feat-case-study__col-->
  <div class="feat-case-study__col">  
    <div class="feat-case-study__content">
      <div class="container container-narrow">
        <h6 class="feat-case-study__ribbon">Featured Case Study</h6>
        <h2 class="feat-case-study__title">Florida High School Athletic Association</h2>
        <p class="feat-case-study__description">loremfjkdsj fklasdjfkadsjflkasdj fklsadjklgsdjagkjasgklsdajgklasdjgk</p>
        <a data-w-id="6b01e7aa-5773-fde8-2b75-70067b33ff2d" href="#" class="feat-case-study__link underline-link w-inline-block">
          <div>View Project</div>
            <div class="underline-container">
              <div class="underline-track underline-track-white"></div>
              <div class="underline-progress underline-progress-white"></div>
          </div>
        </a>
      </div><!--/.container-->
    </div><!--/.feat-case-study__content-->
  </div><!--/.feat-case-study__col-->
</div><!--/.section-->




<div class="section section-center-mobile cta bg-primary overflow-hidden">
  <div class="container">
    <h2 class="cta">Let's Work Together</h3>
    <a href="/contact" class="button button-secondary">Get In Touch</a>
  </div><!--/.container-->
  <div data-w-id="e243cfb7-fd9e-8a1d-fc6f-e14c8cd05fe7" class="decoration ring cta-ring"></div>
</div><!--/.section-->



<?php get_footer(); ?>
