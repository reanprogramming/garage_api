$(".editor").each(function () {
    const el = this;
    if (!el.classList.contains("ck")) {
        CkeditorInline.create(el)
            .then((editor) => {
                el.parentElement.classList.add("prose", "max-w-full");
            })
            .catch((error) => {
                console.error(error);
            });
    }
});
