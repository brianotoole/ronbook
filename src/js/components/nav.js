// Nav

// Headroom.js
import Headroom from "headroom.js/dist/headroom.js";
window.Headroom = Headroom;
import "headroom.js/dist/jQuery.headroom.js";



(function($) {
  "use strict";

// Global vars
var trigger = $("#js-nav-toggle");
var header = $(".navigation-bar");
var width = $(window).width();


if (width >= 1025) {
  header.addClass("header-show header-transparent");
  var header_headroom = new Headroom(document.querySelector(".navigation-bar"), {
    offset: 220,
    tolerance: {
      up: 0,
      down: 0
    },
    classes: {
      notTop: "header-not-transparent"
    }
  });
  header_headroom.init();
}

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
  /*
  // Detect click outside of nav-mobile, when open, and close nav
  $(".nav-open-overlay").click(function() {
    navClose();
  });
  */
  // Detect click on esc key, when open, and close nav
  $(document).on("keyup", function(e) {
    if (e.keyCode == 27) {
      navClose();
    }
  });
});




})(jQuery);