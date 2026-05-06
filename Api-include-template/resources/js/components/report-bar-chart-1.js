(function () {
    "use strict";

    // Chartjs
    const chart = new Chart($("#report-bar-chart-1")[0], {
        type: "bar",
        data: {
            labels: [
                "Jan",
                "Feb",
                "Mar",
                "Apr",
                "May",
                "Jun",
                "Jul",
                "Aug",
                "Sep",
                "Oct",
                "Nov",
                "Dec",
            ],
            datasets: [
                {
                    label: "Html Template",
                    barThickness: 8,
                    maxBarThickness: 6,
                    data: [
                        60, 150, 30, 200, 180, 50, 180, 120, 230, 180, 250, 270,
                    ],
                    backgroundColor: () => getColor("--color-primary", 0.3),
                    borderColor: () => getColor("--color-primary", 0.6),
                    borderWidth: 0.5,
                },
                {
                    label: "VueJs Template",
                    barThickness: 8,
                    maxBarThickness: 6,
                    data: [
                        50, 135, 40, 180, 190, 60, 150, 90, 250, 170, 240, 250,
                    ],
                    backgroundColor: () => getColor("--color-foreground", 0.2),
                    borderColor: () => getColor("--color-foreground", 0.3),
                    borderWidth: 0.5,
                },
            ],
        },
        options: {
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    display: false,
                },
            },
            scales: {
                x: {
                    ticks: {
                        font: {
                            size: 11,
                        },
                        color: () => getColor("--color-foreground", 0.5),
                    },
                    grid: {
                        display: false,
                    },
                    border: {
                        display: false,
                    },
                },
                y: {
                    ticks: {
                        display: false,
                    },
                    grid: {
                        color: () => getColor("--color-foreground", 0.2),
                    },
                    border: {
                        dash: [2, 2],
                        display: false,
                    },
                },
            },
        },
    });

    // Watch class name changes
    watchClassChanges($("html")[0], (currentClassName) => {
        chart.update();
    });
})();
