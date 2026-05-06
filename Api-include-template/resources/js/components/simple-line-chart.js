(function () {
    "use strict";

    // Chartjs
    const chart = new Chart($("#simple-line-chart")[0], {
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
                        0, 300, 400, 560, 320, 600, 720, 850, 690, 805, 1200,
                        1010,
                    ],
                    borderWidth: 1,
                    borderColor: () => getColor("--color-primary", 0.8),
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
