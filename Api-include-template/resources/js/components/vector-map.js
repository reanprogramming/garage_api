new jsVectorMap({
    selector: "#map",
    map: "world",
    backgroundColor:
        "color-mix(in oklch, var(--color-foreground), transparent 98%)",
    regionStyle: {
        initial: {
            fill: "color-mix(in oklch, var(--color-foreground), transparent 82%)",
        },
    },
    markerStyle: {
        initial: {
            r: 4,
            strokeWidth: 15,
            stroke: "color-mix(in oklch, var(--color-primary), transparent 60%)",
            fill: "color-mix(in oklch, var(--color-primary), transparent 30%)",
        },
        hover: {
            fill: "color-mix(in oklch, var(--color-primary), transparent 30%)",
        },
    },
    markers: [
        {
            name: "Turki",
            coords: [38.801594, 40.19264],
        },
        {
            name: "Mesir",
            coords: [24.502617, 26.833264],
        },
        {
            name: "Yunani",
            coords: [40.426437, 23.49342],
        },
        {
            name: "Ukraina",
            coords: [47.498998, 33.512951],
        },
        {
            name: "Amerika Serikat",
            coords: [44.320289, -97.444085],
        },
        {
            name: "Canada",
            coords: [49.8206, -84.436271],
        },
        {
            name: "Canada",
            coords: [65.73295, -137.04535],
        },
        {
            name: "Brazil",
            coords: [-7.38919, -66.330802],
        },
        {
            name: "Brazil",
            coords: [-15.648985, -54.90502],
        },
        {
            name: "Rusia",
            coords: [63.692782, 101.364518],
        },
        {
            name: "Australia",
            coords: [-22.456245, 132.30202],
        },
        {
            name: "Indonesia",
            coords: [-7.214834, 107.1653],
        },
    ],
});
