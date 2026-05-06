(function () {
    "use strict";

    // Dark mode
    const darkMode = {
        getDarkMode() {
            const darkMode = localStorage.getItem("darkMode");
            if (darkMode === null) {
                return "inactive";
            } else if (darkMode === "system") {
                return window.matchMedia("(prefers-color-scheme:dark)").matches
                    ? "active"
                    : "inactive";
            } else {
                return darkMode;
            }
        },
        toggleDarkMode(value) {
            localStorage.setItem("darkMode", value);
            darkMode.applyDarkMode();
        },
        applyDarkMode() {
            if (darkMode.getDarkMode() === "active") {
                $("html").addClass("dark");
            } else {
                $("html").removeClass("dark");
            }
        },
    };

    // Theme color
    const themeColor = {
        getThemeColor() {
            const themeColor = localStorage.getItem("themeColor");
            if (themeColor === null) {
                return "default";
            } else {
                return themeColor;
            }
        },
        setThemeColor(value) {
            localStorage.setItem("themeColor", value);
            themeColor.applyThemeColor();
        },
        applyThemeColor() {
            $("html").data("theme", themeColor.getThemeColor());
        },
    };

    // Initial function
    (function () {
        darkMode.applyDarkMode();
        themeColor.applyThemeColor();
    })();

    $("[data-theme]").on("click", function () {
        themeColor.setThemeColor($(this).data("theme"));
    });

    $("[data-dark-mode]").on("click", function () {
        darkMode.toggleDarkMode($(this).data("dark-mode"));
    });
})();
