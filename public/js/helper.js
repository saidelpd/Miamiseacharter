function removeMinifiedOnSmallScreen() {
    if( ($(document).innerWidth()) < 1200) {
        $('.wrapper').removeClass('main-nav-minified');
    }
}

// helper function, get dayTime
function gt(y, m, d) {
    return new Date(y, m-1, d).getTime();
}

$(document).ready(function () {
    /**
     * Navigation Bar
      * @type {*|jQuery|HTMLElement}
     */
    $mainMenu = $('.main-menu');
    // init collapse first for browser without transition support (IE9)
    $mainMenu.find('li').has('ul').children('ul').collapse({toggle: false});
    $mainMenu.find('li.active').has('ul').children('ul').addClass('in');
    $mainMenu.find('li').not('.active').has('ul').children('ul').removeClass('in');
    $('.main-menu .submenu-toggle').click( function(e){
        e.preventDefault();
        $currentItem = $(this).parent();
        $mainMenu.find('li').not($currentItem).not($currentItem.parents('li')).removeClass('active').children('ul.in').collapse('hide');
        $currentItem.toggleClass('active').children('ul').collapse('toggle');
        $('body, html').animate({
            scrollTop: 50
        }, 500);
    });
    $('.btn-off-canvas').click( function() {
        if($('.wrapper').hasClass('off-canvas-active')) {
            $('.wrapper').removeClass('off-canvas-active');
        } else {
            $('.wrapper').addClass('off-canvas-active');
        }
    });
    $('.btn-nav-sidebar-minified').click( function(e) {
        e.preventDefault();
        if( $('.wrapper').hasClass('main-nav-minified') ) {
            $('.wrapper').removeClass('main-nav-minified');
            $('#main-nav').hide();
            setTimeout(
                function () {
                    $('#main-nav').fadeIn(500);
                }, 100);
        }else {
            $('.wrapper').addClass('main-nav-minified');
        }
    });
    $(window).resize(removeMinifiedOnSmallScreen);
});


