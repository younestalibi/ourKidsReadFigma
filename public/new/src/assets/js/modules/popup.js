/* 
    Popup
*/

const $btnPopupClose = $('.js-popup-close');
const $btnPopup = $('.js-popup-button');
const $popup = $('.js-popup');
const $fixedBody = $('body');

$btnPopupClose.on('click', function (event) {
    event.preventDefault();
    $popup.toggleClass('is-active');
    $fixedBody.toggleClass('is-fixed');
});

$btnPopup.on('click', function (event) {
    event.preventDefault();
    $fixedBody.toggleClass('is-fixed');

    const $this = $(this);
    const $btnPopupID = $this.attr('href').replace('#slide-', '');

    $('.js-slider-slides').slick('slickGoTo', $btnPopupID);

    $popup.toggleClass('is-active');
});
