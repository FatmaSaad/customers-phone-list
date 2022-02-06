/**
 *-------------------------------------------------------------
 * Global variables
 *-------------------------------------------------------------
 */







function updateSettings() {
    const formData = new FormData($("#updateAvatar")[0]);
    if (messengerColor) {
        formData.append("messengerColor", messengerColor);
    }
    if (dark_mode) {
        formData.append("dark_mode", dark_mode);
    }
    $.ajax({
        url: url + "/updateSettings",
        method: "POST",
        data: formData,
        dataType: "JSON",
        processData: false,
        contentType: false,
        beforeSend: () => {
            // close settings modal
            app_modal({
                show: false,
                name: "settings",
            });
            // Show waiting alert modal
            app_modal({
                show: true,
                name: "alert",
                buttons: false,
                body: loadingSVG("32px"),
            });
        },
        success: (data) => {
            if (data.error) {
                // Show error message in alert modal
                app_modal({
                    show: true,
                    name: "alert",
                    buttons: true,
                    body: data.msg,
                });
            } else {
                // Hide alert modal
                app_modal({
                    show: false,
                    name: "alert",
                    buttons: true,
                    body: "",
                });

                // reload the page
                location.reload(true);
            }
        },
        error: () => {
            console.error("Server error, check your response");
        },
    });
}


   
