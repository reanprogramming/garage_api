$(".editor").each(function () {
    const el = this;
    if (!el.classList.contains("ck")) {
        CkeditorDocument.create(el.querySelectorAll(".editable")[0])
            .then((editor) => {
                el.parentElement.classList.add("prose", "max-w-full");
                el.querySelectorAll(".toolbar")[0].append(
                    editor.ui.view.toolbar.element
                );
            })
            .catch((error) => {
                console.error(error);
            });
    }
});
