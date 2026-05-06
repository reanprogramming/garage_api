(function () {
    "use strict";

    // Fake visitor data
    const chartData = new Array(40).fill(0).map((data, key) => {
        if (key % 3 == 0 || key % 5 == 0) {
            return Math.ceil(Math.random() * (0 - 20) + 20);
        } else {
            return Math.ceil(Math.random() * (0 - 7) + 7);
        }
    });

    // Fake visitor bar color
    const chartColor = () =>
        chartData.map((data) => {
            if (data >= 8 && data <= 14) {
                return getColor("--color-primary", 0.5);
            } else if (data >= 15) {
                return getColor("--color-primary", 0.6);
            }

            return getColor("--color-primary", 0.4);
        });

    // Chartjs
    const chart = new Chart($("#report-bar-chart")[0], {
        type: "bar",
        data: {
            labels: chartData,
            datasets: [
                {
                    label: "Html Template",
                    barThickness: 6,
                    data: chartData,
                    backgroundColor: chartColor,
                    borderColor: () => getColor("--color-primary", 0.1),
                    borderWidth: 0.8,
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

    setInterval(() => {
        // Swap visitor data
        let newData = chartData[0];
        chartData.shift();
        chartData.push(newData);

        // Swap visitor bar color
        const newChartColors = chartColor();
        let newColor = newChartColors[0];
        newChartColors.shift();
        newChartColors.push(newColor);

        chart.update();
    }, 1000);

    // Watch class name changes
    watchClassChanges($("html")[0], (currentClassName) => {
        chart.update();
    });
})();
