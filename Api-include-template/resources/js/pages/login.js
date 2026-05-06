(function () {
    "use strict";

    $(".login-button").on("click", function (e) {
        $(this).html("Logging In...");
        setTimeout(() => {
            window.location.href = "/";
        }, 2000);
    });
})();
