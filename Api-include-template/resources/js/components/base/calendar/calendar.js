import { Calendar } from "@fullcalendar/core";
import dayGridPlugin from "@fullcalendar/daygrid";

$(".calendar").each(function () {
    const calendar = new Calendar($(this).children("div")[0], {
        plugins: [interactionPlugin, dayGridPlugin, timeGridPlugin, listPlugin],
        droppable: true,
        headerToolbar: {
            left: "prev,next today",
            center: "title",
            right: "dayGridMonth,timeGridWeek,timeGridDay,listWeek",
        },
        initialDate: "2045-01-01",
        navLinks: true,
        editable: true,
        dayMaxEvents: true,
        events: [
            {
                title: "Vue Vixens Day",
                start: "2045-01-05",
                end: "2045-01-08",
            },
            {
                title: "VueConfUS",
                start: "2045-01-11",
                end: "2045-01-15",
            },
            {
                title: "VueJS Amsterdam",
                start: "2045-01-17",
                end: "2045-01-21",
            },
            {
                title: "Vue Fes Japan 2045",
                start: "2045-01-21",
                end: "2045-01-24",
            },
            {
                title: "Laracon 2045",
                start: "2045-01-24",
                end: "2045-01-27",
            },
        ],
        drop: function (info) {
            if (
                document.querySelectorAll("#checkbox-events").length &&
                document.querySelectorAll("#checkbox-events")[0].checked
            ) {
                info.draggedEl.parentElement.remove();
                if (
                    document.querySelectorAll("[data-events]")[0].children
                        .length == 1
                ) {
                    document
                        .querySelectorAll("[data-no-events]")[0]
                        .classList.remove("hidden");
                }
            }
        },
    });

    calendar.render();
});
