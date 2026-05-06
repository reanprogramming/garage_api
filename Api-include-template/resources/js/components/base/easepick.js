$(".easepick").each(function () {
    const params = Function(
        '"use strict";return (' + $(this).data("config") + ")"
    )();
    const options = {
        format: "D MMM, YYYY",
        plugins: [],
        css: [$(this)[0].getAttribute("data-css")],
        ...params,
    };

    if (params.multipleMode) {
        options.plugins = [...options.plugins, EasepickBundle.RangePlugin];
        options.RangePlugin = {
            tooltip: true,
        };
    }

    if (!$(this)[0].value) {
        let date = dayjs().format(options.format);
        date += params.multipleMode
            ? " - " + dayjs().add(1, "month").format(options.format)
            : "";

        $(this)[0].value = date;
    }

    new EasepickBundle.easepick.create({
        element: $(this)[0],
        ...options,
    });
});
