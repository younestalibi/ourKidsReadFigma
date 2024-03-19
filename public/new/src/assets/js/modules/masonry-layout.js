/*
* Masonry Layout
*/

import Masonry from 'masonry-layout';

const $win = $(window);
const $doc = $(document);
const $grid = $('.js-masonry');

$win.on('load', function () {
    if ($grid.length) {
        var elem = $grid.get(0);

        var msnry = new Masonry(elem, {
            horizontalOrder: true,
            columnWidth: '.masonry__grid-sizer',
            gutter: '.masonry__gutter-sizer',
            itemSelector: '.masonry__col',
            percentPosition: true
        });

    }
});
