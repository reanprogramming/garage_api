(function () {
    "use strict";

    const el = $("#onboarding-dialog")[0];
    const dialogInstance = tailwind.Modal.getOrCreateInstance(el);

    setTimeout(() => {
        dialogInstance.show();
    }, 2000);
})();
