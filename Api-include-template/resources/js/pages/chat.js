(function () {
    "use strict";

    $(".chat-item").each(function () {
        $(this).on("click", function () {
            $(".chat-content").each(function () {
                $(this).hasClass("hidden")
                    ? $(this).removeClass("hidden")
                    : $(this).addClass("hidden");
            });
        });
    });
})();
