import { slideDown, slideUp, reactive } from "../utils/helper";

(function () {
    "use strict";

    // Default state
    const state = reactive({
        compactMenu: true,
        compactMenuOnHover: false,
        mobileMenuOpen: false,
    });

    state.onChange(
        ["compactMenu", "compactMenuOnHover", "mobileMenuOpen"],
        () => {
            // Side menu
            if (state.compactMenu) {
                $(".side-menu").first().addClass("side-menu--collapsed");
            } else {
                $(".side-menu").first().removeClass("side-menu--collapsed");
            }

            // Side menu hover
            if (state.compactMenuOnHover) {
                $(".side-menu").first().addClass("side-menu--on-hover");
            } else {
                $(".side-menu").first().removeClass("side-menu--on-hover");
            }

            // Mobile menu
            if (state.mobileMenuOpen) {
                $(".side-menu").first().addClass("side-menu--mobile-menu-open");
                $(".close-mobile-menu")
                    .first()
                    .addClass("close-mobile-menu--mobile-menu-open");
                $(".top-menu").first().addClass("top-menu--mobile-menu-open");
            } else {
                $(".side-menu")
                    .first()
                    .removeClass("side-menu--mobile-menu-open");
                $(".close-mobile-menu")
                    .first()
                    .removeClass("close-mobile-menu--mobile-menu-open");
                $(".top-menu")
                    .first()
                    .removeClass("top-menu--mobile-menu-open");
            }

            // Content
            if (state.compactMenu && !state.compactMenuOnHover) {
                $(".content").first().addClass("content--compact");
            } else {
                $(".content").first().removeClass("content--compact");
            }

            // Content scroll area
            if (
                state.compactMenu &&
                state.compactMenuOnHover &&
                !state.mobileMenuOpen
            ) {
                $(".content__scroll-area").first().addClass("-ml-[155px]");
            } else {
                $(".content__scroll-area").first().removeClass("-ml-[155px]");
            }
        }
    );

    // Compact side menu hover event
    $(".side-menu").on("mouseover", function () {
        state.compactMenuOnHover = true;
    });

    $(".side-menu").on("mouseleave", function () {
        state.compactMenuOnHover = false;
    });

    // Toggle compact menu event
    $(".toggle-compact-menu").on("click", function (event) {
        event.preventDefault();
        state.compactMenu = !state.compactMenu;
        localStorage.setItem("compactMenu", state.compactMenu);
    });

    // Open mobile menu event
    $(".open-mobile-menu").on("click", function (event) {
        event.preventDefault();
        state.mobileMenuOpen = true;
    });

    // Close mobile menu event
    $(".close-mobile-menu").on("click", function (event) {
        event.preventDefault();
        state.mobileMenuOpen = false;
    });

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

    // Top bar scroll event
    $(".content__scroll-area").on("scroll", function () {
        const scrollTop = $(this)[0].scrollTop;
        if (scrollTop > 0) {
            $(".top-bar").addClass("scrolled");
        } else {
            $(".top-bar").removeClass("scrolled");
        }
    });

    // Sidemenu scroll
    (function () {
        $(".scrollable").each(function () {
            const simpleBarEl = new SimpleBar($(this).parent()[0]);
            simpleBarEl.getScrollElement().scrollTop =
                $(".side-menu__link--active")[0].getBoundingClientRect().top -
                250;
        });
    })();

    // Sidemenu collapse
    (function () {
        $(".scrollable")
            .find("li")
            .children("a")
            .on("click", function (e) {
                const el = $(this).parent().children("ul")[0];

                if (el) {
                    if ($(el).hasClass("block")) {
                        $(this)
                            .find(".side-menu__link__chevron")
                            .removeClass("transform rotate-180");
                        slideUp(el, 300, () => {
                            $(el).removeClass("block").addClass("hidden");
                        });
                    } else {
                        $(this)
                            .find(".side-menu__link__chevron")
                            .addClass("transform rotate-180");
                        slideDown(el, 300, () => {
                            $(el).removeClass("hidden").addClass("block");
                        });
                    }
                } else {
                    e.preventDefault();
                    window.location.href = $(this).attr("href");
                }
            });
    })();

    // Topmenu collapse
    (function () {
        $(".top-menu")
            .find("li")
            .children("a")
            .on("click", function (e) {
                const el = $(this).parent().children("ul")[0];

                if (el) {
                    if ($(el).hasClass("block")) {
                        $(this)
                            .find(".top-menu__link__chevron")
                            .removeClass("transform rotate-180");
                        slideUp(el, 300, () => {
                            $(el).removeClass("block").addClass("hidden");
                        });
                    } else {
                        $(this)
                            .find(".top-menu__link__chevron")
                            .addClass("transform rotate-180");
                        slideDown(el, 300, () => {
                            $(el).removeClass("hidden").addClass("block");
                        });
                    }
                } else {
                    e.preventDefault();
                    window.location.href = $(this).attr("href");
                }
            });
    })();

    // Global search
    (function () {
        const el = $("#quick-search-modal")[0];
        if (el) {
            const modal = tailwind.Modal.getOrCreateInstance(el);

            $("body").on("keydown", function (e) {
                if (e.key === "Escape") {
                    modal.hide();
                } else if (e.metaKey && e.key === "k") {
                    modal.show();
                }
            });

            $(".quick-search-toggle").on("click", function (e) {
                modal.show();
            });
        }
    })();

    // Initial function
    (function () {
        const compactMenu = localStorage.getItem("compactMenu");
        if (compactMenu === null || compactMenu == "false") {
            state.compactMenu = false;
        }

        window.onresize = () => {
            if (window.innerWidth <= 1600) {
                localStorage.setItem("compactMenu", "true");
                state.compactMenu = true;
            }
        };

        darkMode.applyDarkMode();
        themeColor.applyThemeColor();
    })();
})();
