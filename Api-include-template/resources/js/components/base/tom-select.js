$(".tom-select").each(function () {
    const params = Function(
        '"use strict";return (' + $(this).data("config") + ")"
    )();
    let options = {
        plugins: {
            dropdown_input: {},
        },
        ...params,
    };

    if ($(this)[0].hasAttribute("multiple")) {
        options = {
            ...options,
            plugins: {
                ...options.plugins,
                remove_button: {
                    title: "Remove this item",
                },
            },
            persist: false,
            create: true,
            onDelete: function (values) {
                return confirm(
                    values.length > 1
                        ? "Are you sure you want to remove these " +
                              values.length +
                              " items?"
                        : 'Are you sure you want to remove "' + values[0] + '"?'
                );
            },
        };
    }

    if (params.header) {
        options = {
            ...options,
            plugins: {
                ...options.plugins,
                dropdown_header: {
                    title: params.header,
                },
            },
        };
    }

    new TomSelect($(this)[0], options);
});
