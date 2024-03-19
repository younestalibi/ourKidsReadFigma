/*
* Accordion
*/

const $accordion = $('.js-accordion');
$('.js-accordion .accordion__section').find('.accordion__body').hide();

$accordion.on('click', '.accordion__head', function () {
  const $this = $(this);

  $this.parent().toggleClass('is-expanded');
  $this.next().slideToggle();
  $this.parent().siblings().removeClass('is-expanded');
  $this.parent().siblings().find('.accordion__body').slideUp();
});
