(function () {
    "use strict";

    // Chartjs
    const chart = new Chart($("#horizontal-bar-chart")[0], {
        type: "bar",
        data: {
            labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug"],
            datasets: [
                {
                    label: "Html Template",
                    barPercentage: 0.5,
                    barThickness: 8,
                    maxBarThickness: 6,
                    minBarLength: 2,
                    data: [0, 200, 250, 200, 500, 450, 850, 1050],
                    backgroundColor: () => getColor("--color-primary", 0.3),
                    borderColor: () => getColor("--color-primary", 0.6),
                    borderWidth: 0.5,
                },
                {
                    label: "VueJs Template",
                    barPercentage: 0.5,
                    barThickness: 8,
                    maxBarThickness: 6,
                    minBarLength: 2,
                    data: [0, 300, 400, 560, 320, 600, 720, 850],
                    backgroundColor: () => getColor("--color-foreground", 0.2),
                    borderColor: () => getColor("--color-foreground", 0.3),
                    borderWidth: 0.5,
                },
            ],
        },
        options: {
            indexAxis: "y",
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
                        display: false,
                    },
                    border: {
                        display: false,
                    },
                },
                y: {
                    ticks: {
                        font: {
                            size: "12",
                        },
                        color: () => getColor("--color-foreground", 0.5),
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
