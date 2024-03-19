/* 
  Slick slider
*/

import 'slick-carousel';

$('.js-slider-slides').slick({
  infinite: false,
  prevArrow: $('.slider__prev'),
  nextArrow: $('.slider__next'),
  speed: 300
});