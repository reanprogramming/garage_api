(function () {
    "use strict";

    $("[data-color-toggle]").each(function () {
        $(this).on("click", function () {
            $("[data-color-toggle]").removeClass("active");
            $(this).addClass("active");

            const color = $(this).data("color-toggle");
            $(".color-variable")[0].style.setProperty(
                "--color",
                `var(--color-${color})`
            );
        });
    });
})();
