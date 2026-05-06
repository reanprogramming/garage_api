$(".tiny-slider").each(function () {
    const params = Function(
        '"use strict";return (' + $(this).data("config") + ")"
    )();
    $(this)[0].tns = tns({
        container: $(this)[0],
        mouseDrag: true,
        autoplay: true,
        controls: false,
        center: true,
        items: 1,
        nav: false,
        speed: 500,
        ...params,
    });
});
