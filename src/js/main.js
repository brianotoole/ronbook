/*********************************************************
  Main JS Entry Point
*********************************************************/

// GLOBAL
require('./build.js'); //via webflow export
//require('./global/events.js');

// COMPONENTS
// @TODO: convert to es6
//require('./components/nav.js');
//require('./components/social-sharing.js')

//import Modal from './components/modal';
//var modal = new Modal();

// TEMPLATES
//require('./templates/about.js');

var trigger = $("#js-nav-toggle");

function navToggle() {
  $("body").toggleClass("nav-open");
  $(".hamburger").toggleClass("is-active");
  $(".navigation-menu").toggleClass("is-active");
}

function navClose() {
  $("body").removeClass("nav-open");
  $(".hamburger").removeClass("is-active");
  $(".navigation-menu").removeClass("is-active");
}

trigger.click(function(e) {
  navToggle();
  // Detect click outside of nav-mobile, when open, and close nav
  $(".nav-open-overlay").click(function() {
    navClose();
  });
  // Detect click on esc key, when open, and close nav
  $(document).on("keyup", function(e) {
    if (e.keyCode == 27) {
      navClose();
    }
  });
});