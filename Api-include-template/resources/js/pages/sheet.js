(function () {
    "use strict";

    $("#sheet-size")
        .find("[data-change-size]")
        .on("click", function () {
            const size = $(this).data("change-size");
            const currentSize = $("#sheet-size").data("current-size");

            if (currentSize)
                $("#sheet-size").find(".box").removeClass(currentSize);
            $("#sheet-size").data("current-size", size);
            $("#sheet-size").find(".box").addClass(size);
        });
})();
