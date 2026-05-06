(function () {
    "use strict";

    // Chartjs
    $(".report-donut-chart-1").each(function () {
        const chart = new Chart($(this)[0], {
            type: "doughnut",
            data: {
                labels: ["Yellow", "Dark"],
                datasets: [
                    {
                        data: [15, 10, 65],
                        backgroundColor: () => [
                            getColor("--color-pending", 0.4),
                            getColor("--color-warning", 0.4),
                            getColor("--color-primary", 0.4),
                        ],
                        borderWidth: 1,
                        borderColor: () => [
                            getColor("--color-pending", 0.9),
                            getColor("--color-warning", 0.9),
                            getColor("--color-primary", 0.9),
                        ],
                    },
                ],
            },
            options: {
                offset: 20,
                borderRadius: 5,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false,
                    },
                },
                cutout: "83%",
            },
        });

        // Watch class name changes
        watchClassChanges($("html")[0], (currentClassName) => {
            chart.update();
        });
    });
})();
