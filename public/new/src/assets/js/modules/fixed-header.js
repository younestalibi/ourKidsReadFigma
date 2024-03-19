/* 
  Fixed header
*/

const $header = $('.js-header');
const $scrollAfter = $header.height() / 2;

$(window).on('scroll', function () {
  const $scrollPosition = $(this).scrollTop();

  if ($scrollPosition > $scrollAfter) {
    $header.addClass('is-fixed');
  } else {
    $header.removeClass('is-fixed');
  }
});