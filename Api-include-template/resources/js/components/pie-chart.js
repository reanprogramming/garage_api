(function () {
    "use strict";

    // Chartjs
    const chart = new Chart($("#pie-chart")[0], {
        type: "pie",
        data: {
            labels: ["Html", "Vuejs", "Laravel"],
            datasets: [
                {
                    data: [15, 10, 65],
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
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    labels: {
                        color: () => getColor("--color-foreground", 0.5),
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
