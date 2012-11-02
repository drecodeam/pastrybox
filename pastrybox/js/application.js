// Random bits of code that do random stuff (awesome doc, please)
! function ($) {

    $window = $(window);

    // *** Scrolling ***
    // Smooth scrolling
    function scrollSmoothly(toHash) {
        $('html,body').animate({
            scrollTop: toHash.offset().top
        }, 300);
    }

    // Links with class="jump"
    $(".jump").click(function (event) {
        event.preventDefault();
        scrollSmoothly($(this.hash));
    });

    // *** Keyboard: Radical Nav ***
    // TO DO
    /*
        $window.bind('keypress', function(event) {
            var cmdOrCtrl = event.metaKey || event.ctrlKey;

     // Back to top
            if( event.which === 49 && cmdOrCtrl ) {
                event.preventDefault();
                alert("up");
            }
        });
     */

    // *** tooltip ***
    function tooltipify() {
        if ($window.width() > 980) {

            $('.thought-footer .tooltipify a').tooltip({
                placement: 'right'
            });

            $('.navbar .tooltipify a').tooltip({
                placement: 'bottom'
            });

            $('.content-nav .tooltipify a').tooltip({
                placement: 'top'
            });

        } else {
            $('.thought-footer .tooltipify a').tooltip("destroy");
            $('.navbar .tooltipify a').tooltip("destroy");
            $('.content-nav .tooltipify a').tooltip("destroy");
        }
    }

    $window.resize($.debounce(300, function () {
        tooltipify();
    }));
    tooltipify();

    // *** prettyPrint ***
    //window.prettyPrint && prettyPrint();
}(window.jQuery)