import Chart from "chart.js/auto";

window.getColor = (name, opacity = 1) => {
    const color = getComputedStyle(document.documentElement)
        .getPropertyValue(name)
        .trim();
    if (opacity < 1) {
        return `color-mix(in oklch, ${color} ${opacity * 100}%, transparent ${
            100 - opacity * 100
        }%)`;
    }
    return color;
};

window.watchClassChanges = (element, callback) => {
    const observer = new MutationObserver(([mutation]) => {
        if (
            mutation.attributeName === "class" ||
            mutation.attributeName === "data-theme"
        ) {
            callback(mutation.target.className);
        }
    });

    observer.observe(element, {
        attributes: true,
        attributeFilter: ["class", "data-theme"],
    });
    return observer;
};

window.Chart = Chart;
