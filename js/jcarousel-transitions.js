(function ($, Modernizr) {
    $(function () {
        $('.jcarousel').jcarousel({
            wrap: 'circular',
            transitions: Modernizr.csstransitions ? {
                transforms: Modernizr.csstransforms,
                transforms3d: Modernizr.csstransforms3d,
                easing: 'ease'
            } : false
        });
        $('.menu li').jcarouselPagination({
            'item': function (page, carouselItems) {
                for ($i = 0; page <= 5; $i++) {
                    if (page == 1) {
                        return '<li id="' + page + '"><a href="#profissionalizantes">Profissionalizantes</a></li>';
                    } else if (page == 2) {
                        return '<li id="' + page + '"><a href="#area-saude">Área de Saúde</a></li>';
                    } else if (page == 3) {
                        return '<li id="' + page + '"><a href="#idiomas">Idiomas</a></li>';
                    } else if (page == 4) {
                        return '<li id="' + page + '"><a href="#tecnicos">Técnicos</a></li>';
                    } else if (page == 5) {
                        return '<li id="' + page + '"><a href="#estetica">Estética</a></li>';
                    }
                }
            }
        });
        $('.jcarousel-control-prev').jcarouselControl({
            target: '-=1'
        });
        $('.jcarousel-control-next').jcarouselControl({
            target: '+=1'
        });
        $(".menu-menu-cdeasy #1").append("Profissionalizantes");
    });
})(jQuery, Modernizr);