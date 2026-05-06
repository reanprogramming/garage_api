(function () {
    "use strict";

    const formEl = $(".form-validation")[0];
    const pristine = new Pristine(formEl, {
        classTo: "form-item",
        errorClass: "has-error",
        errorTextParent: "form-item",
        errorTextClass: "text-danger",
    });

    pristine.addValidator(
        formEl.querySelectorAll("input[type='url']")[0],
        function (value) {
            let expression =
                /[-a-zA-Z0-9@:%._\+~#=]{1,256}\.[a-zA-Z0-9()]{1,6}\b([-a-zA-Z0-9()@:%_\+.~#?&//=]*)?/gi;
            let regex = new RegExp(expression);
            if (!value.length || (value.length && value.match(regex))) {
                return true;
            }
            return false;
        },
        "This field is URL format only",
        2,
        false
    );

    $(formEl).on("submit", function (e) {
        e.preventDefault();
        const isValid = pristine.validate();
        if (isValid) {
            // Form is valid, you can submit it
            alert("Form submitted successfully!");
        } else {
            // Form is invalid, show error messages
            alert("Please correct the errors in the form.");
        }
    });
})();
