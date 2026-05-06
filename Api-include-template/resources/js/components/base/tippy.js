(function () {
    "use strict";

    // Tooltips
    $(".tooltip").each(function () {
        const params = {
            content: $(this).data("content"),
        };

        if (params.content.length) {
            tippy($(this)[0], {
                content: "",
                render(instance) {
                    const popper = document.createElement("div");
                    const box = document.createElement("div");

                    popper.appendChild(box);

                    box.className =
                        "backdrop-blur-xl rounded-lg border px-2.5 py-0.5 bg-(--color)/20 border-(--color)/60 text-(--color) [--color:var(--color-primary)]";
                    box.textContent = instance.props.content;

                    return {
                        popper,
                    };
                },
                ...params,
            });
        }
    });
})();
