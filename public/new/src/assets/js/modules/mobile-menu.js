/* 
  Mobile menu
*/

const $fixedBody = $('body');
const $header = $('.js-header');
const $btnNav = $('.js-nav-mobile');

$btnNav.on('click', function (event) {
  event.preventDefault();
  $fixedBody.toggleClass('is-fixed');
  $header.toggleClass('is-active');
  $(this).toggleClass('is-active');
});


$(window).on('resize', function () {
  const $getWindow = $(window).width();

  if ($getWindow > 767) {
    $fixedBody.removeClass('is-fixed');
    $header.removeClass('is-active');
    $btnNav.removeClass('is-active');
  }
});