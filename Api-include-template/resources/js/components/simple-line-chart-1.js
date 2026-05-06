(function () {
    "use strict";

    // Chartjs
    $(".simple-line-chart-1").each(function () {
        const chart = new Chart($(this)[0], {
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
                            0, 200, 250, 200, 500, 450, 850, 1050, 950, 1100,
                            900, 1200,
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
    });
})();
