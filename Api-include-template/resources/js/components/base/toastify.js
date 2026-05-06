$(".toast").each(function () {
    const params = Function(
        '"use strict";return (' + $(this).data("config") + ")"
    )();
    const el = this;

    if (params.triggerId) {
        $(params.triggerId).on("click", function () {
            console.log($(el).clone().removeClass("hide")[0]);
            Toastify({
                node: $(el).clone().removeClass("hide")[0],
                duration: -1,
                newWindow: true,
                close: true,
                gravity: "top",
                position: "right",
                stopOnFocus: true,
                ...params,
            }).showToast();
        });
    }
});
