!function(e){function t(i){if(o[i])return o[i].exports;var n=o[i]={i:i,l:!1,exports:{}};return e[i].call(n.exports,n,n.exports,t),n.l=!0,n.exports}var o={};t.m=e,t.c=o,t.d=function(e,o,i){t.o(e,o)||Object.defineProperty(e,o,{configurable:!1,enumerable:!0,get:i})},t.n=function(e){var o=e&&e.__esModule?function(){return e.default}:function(){return e};return t.d(o,"a",o),o},t.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},t.p="",t(t.s=22)}({22:function(e,t){/*!
 * getwid-post-slider
 */
!function(e){e(document).ready(function(t){e(document.body).on("post-load",function(e){o()});var o=function(){var t=e(".wp-block-getwid-post-slider:not(.getwid-init) .wp-block-getwid-post-slider__content");t.length&&"undefined"!=typeof imagesLoaded&&t.each(function(t){getwid_post_slider=e(this);var o=getwid_post_slider.data("slider-option"),i=o.getwid_fade_effect,n=o.getwid_autoplay,d=o.getwid_autoplay_speed,r=o.getwid_infinite,s=o.getwid_animation_speed,a=o.getwid_arrows,l=o.getwid_dots;i="fade"==i,getwid_pause_on_hover=!1,a="none"!=a,l="none"!=l,getwid_post_slider.closest(".wp-block-getwid-post-slider").addClass("getwid-init"),getwid_post_slider.imagesLoaded().done(function(t){e(t.elements[0]).slick({arrows:a,dots:l,rows:0,slidesToShow:1,slidesToScroll:1,autoplay:n,autoplaySpeed:d,fade:i,speed:s,infinite:r,centerMode:!1,variableWidth:!1,pauseOnHover:!1,adaptiveHeight:!0,rtl:!!Getwid.isRTL})})})};o()})}(jQuery)}});