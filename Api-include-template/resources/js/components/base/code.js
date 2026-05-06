(function () {
    "use strict";

    $(".copy-button").on("click", function () {
        $(".preview-code").addClass("copied");
        setTimeout(() => {
            $(".preview-code").removeClass("copied");
        }, 3000);
    });
})();
