(function () {
    "use strict";

    // Chartjs
    const chart = new Chart($("#report-line-chart")[0], {
        type: "line",
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
                    label: "# of Votes",
                    data: [
                        0, 200, 250, 200, 700, 550, 650, 1050, 950, 1100, 900,
                        1200,
                    ],
                    borderWidth: 1,
                    borderColor: () => getColor("--color-primary", 0.8),
                    backgroundColor: "transparent",
                    pointBorderColor: "transparent",
                    tension: 0.4,
                },
                {
                    label: "# of Votes",
                    data: [
                        0, 300, 400, 560, 320, 600, 720, 850, 690, 805, 1200,
                        1010,
                    ],
                    borderWidth: 1,
                    borderDash: [2, 2],
                    borderColor: () => getColor("--color-foreground"),
                    backgroundColor: "transparent",
                    pointBorderColor: "transparent",
                    tension: 0.4,
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
                            size: 12,
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
                        font: {
                            size: 12,
                        },
                        color: () => getColor("--color-foreground", 0.5),
                        callback: function (value, index, values) {
                            return "$" + value;
                        },
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
