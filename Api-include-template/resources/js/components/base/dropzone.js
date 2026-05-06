$(".dropzone").each(function () {
    const params = Function(
        '"use strict";return (' + $(this).data("config") + ")"
    )();
    let options = {
        accept: (file, done) => {
            console.log("Uploaded");
            done();
        },
        ...params,
    };

    if (params.single) {
        options.maxFiles = 1;
    }

    if (params.fileTypes) {
        options.accept = (file, done) => {
            if (params.fileTypes.split("|").indexOf(file.type) === -1) {
                alert("Error! Files of this type are not accepted");
                done("Error! Files of this type are not accepted");
            } else {
                console.log("Uploaded");
                done();
            }
        };
    }

    let dz = new Dropzone($(this)[0], options);

    dz.on("maxfilesexceeded", (file) => {
        alert("No more files please!");
    });
});
