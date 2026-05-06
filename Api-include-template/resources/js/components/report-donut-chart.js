(function () {
    "use strict";

    // Chartjs
    const chart = new Chart($("#report-donut-chart")[0], {
        type: "pie",
        data: {
            labels: [
                "31 - 50 Years old",
                ">= 50 Years old",
                "17 - 30 Years old",
            ],
            datasets: [
                {
                    data: [15, 65, 10],
                    backgroundColor: () => [
                        getColor("--color-pending", 0.4),
                        getColor("--color-primary", 0.4),
                        getColor("--color-warning", 0.4),
                    ],
                    borderWidth: 1,
                    borderColor: () => [
                        getColor("--color-pending", 0.9),
                        getColor("--color-primary", 0.9),
                        getColor("--color-warning", 0.9),
                    ],
                },
            ],
        },
        options: {
            offset: 20,
            borderRadius: 5,
            cutout: "85%",
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    display: false,
                },
            },
        },
    });

    // Watch class name changes
    watchClassChanges($("html")[0], (currentClassName) => {
        chart.update();
    });
})();
