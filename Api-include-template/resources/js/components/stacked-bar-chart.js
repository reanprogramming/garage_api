(function () {
    "use strict";

    // Chartjs
    const chart = new Chart($("#stacked-bar-chart")[0], {
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
                    barPercentage: 0.5,
                    barThickness: 15,
                    maxBarThickness: 8,
                    minBarLength: 2,
                    backgroundColor: () => getColor("--color-primary", 0.3),
                    borderColor: () => getColor("--color-primary", 0.6),
                    borderWidth: 0.5,
                    data: [
                        0, -200, 250, -200, 700, -550, 650, -1050, 950, -1100,
                        900, -1200, 200, -250, 200, -700,
                    ],
                },
                {
                    label: "VueJs Template",
                    barPercentage: 0.5,
                    barThickness: 15,
                    maxBarThickness: 8,
                    minBarLength: 2,
                    backgroundColor: () => getColor("--color-foreground", 0.2),
                    borderColor: () => getColor("--color-foreground", 0.3),
                    borderWidth: 0.5,
                    data: [
                        0, 300, -400, 560, -320, 600, -720, 850, -690, 805,
                        -1200, 1010, -300, 400, -560,
                    ],
                },
            ],
        },
        options: {
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    labels: {
                        color: () => getColor("--color-foreground", 0.5),
                    },
                },
            },
            scales: {
                x: {
                    stacked: true,
                    ticks: {
                        font: {
                            size: "12",
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
                    stacked: true,
                    ticks: {
                        font: {
                            size: "12",
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
