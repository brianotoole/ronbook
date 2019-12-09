<?php /* Template Name: Contact */

get_header();

get_template_part('template-parts/hero', '');


?>


<!-- INTRO -->
<div id="First-Section" class="section section-center-mobile intro first-section text-center">
    <div data-w-id="562ba68e-0ae8-5582-dbff-17f74b7d21e2" class="container container-narrow">
        <h2>Our Office</h2>
        <div class="heading-underline"></div>
        <div class="heading-underline"></div>
        <p><strong>Ronald L. Book, P.A.</strong></p>
        <p>18851 NE 29th Ave. STE 1010<br>Aventura, FL 33180</p>
        <p>305.935.1866</p>
    </div>
</div>




<!-- CASE STUDY -->
<div data-w-id="562ba68e-0ae8-5582-dbff-17f74b7d21e2" class="section-center-mobile feat-case-study bg-primary">
  <div class="feat-case-study__col feat-case-study__col--image">  
  </div><!--/.feat-case-study__col-->
  <div class="feat-case-study__col">  
    <div class="feat-case-study__content">
      <div class="container container-narrow">
        <h2 class="feat-case-study__title">Let's Discuss Your Next Project</h2>
        <p class="feat-case-study__description">Fill out the form below and someone from our team will be in touch as soon as possible.</p>
        <a data-w-id="6b01e7aa-5773-fde8-2b75-70067b33ff2d" href="#" class="feat-case-study__link underline-link w-inline-block">
        <?php echo do_shortcode('[contact-form-7 id="100" title="Contact"]'); ?>
        </a>
      </div><!--/.container-->
    </div><!--/.feat-case-study__content-->
  </div><!--/.feat-case-study__col-->
</div><!--/.section-->





<?php get_footer(); ?>
