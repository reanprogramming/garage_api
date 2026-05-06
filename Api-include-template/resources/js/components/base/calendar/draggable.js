$(".calendar-draggable").each(function () {
    new Draggable($(this)[0], {
        itemSelector: "[data-event]",
        eventData: function (el) {
            return {
                title: el.querySelectorAll("[data-title]")[0].innerText,
                duration: {
                    days: parseInt(
                        el.querySelectorAll("[data-days]")[0].innerText
                    ),
                },
            };
        },
    });
});
