(function () {
    "use strict";

    // Page loader
    setTimeout(() => {
        $(".page-loader").addClass("opacity-0");
        setTimeout(() => {
            $(".page-loader").addClass("hidden");
        }, 1000);
    }, 1000);
})();
