/* 
* Tabs
*/

const $btnTab = $('.js-tabs-nav a');
const $tabPane = $('.js-tab-pane');
const $tabsBody = $('.js-tabs-body');

$btnTab.on('click', function (event) {
    event.preventDefault();
    event.stopPropagation();

    const $this = $(this);
    const $btnTabID = $this.attr('href');

    if (!$this.hasClass('is-current')) {
        $btnTab
            .parent()
            .removeClass('is-current');

        $this
            .parent()
            .addClass('is-current');

        $tabPane.removeClass('is-current');

        $($btnTabID).addClass('is-current');
    }
});

$(window).on('load resize', function () {

    const $getWindow = $(window).width();

    if ($getWindow <= 767) {
        $btnTab
            .parent()
            .removeClass('is-current');

        $tabPane.removeClass('is-current');

        $tabPane.removeClass('is-current');

        $tabPane.each(function () {
            $(this).appendTo('#link-' + $(this).attr("id"));
        });

    } else if ($getWindow > 767) {
        $tabPane.each(function () {
            $(this).appendTo($tabsBody);
        });

        if (!$tabPane.hasClass('is-current')) {

            $tabPane.removeClass('is-current');

            $tabPane.first().addClass('is-current');
        }
    }
});

