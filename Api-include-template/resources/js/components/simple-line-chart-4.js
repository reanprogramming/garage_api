(function () {
    "use strict";

    // Chartjs
    const chart = new Chart($("#simple-line-chart-4")[0], {
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
                    borderWidth: 2,
                    borderDash: [2, 2],
                    borderWidth: 1,
                    borderColor: () => getColor("--color-foreground", 0.8),
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
                        display: false,
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
                        display: false,
                    },
                    border: {
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
