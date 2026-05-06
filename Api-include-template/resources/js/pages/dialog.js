(function () {
    "use strict";

    $("#dialog-size")
        .find("[data-change-size]")
        .on("click", function () {
            const size = $(this).data("change-size");
            const currentSize = $("#dialog-size").data("current-size");

            if (currentSize)
                $("#dialog-size").find(".box").removeClass(currentSize);
            $("#dialog-size").data("current-size", size);
            $("#dialog-size").find(".box").addClass(size);
        });
})();
