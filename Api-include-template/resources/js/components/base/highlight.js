$(".highlight").each(function () {
    const highlightedCode = hljs.highlight(jsBeautify.html($(this).html()), {
        language: "html",
    }).value;

    $(this).html(highlightedCode);
});
