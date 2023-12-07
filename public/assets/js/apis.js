"use strict";

var token = $("meta[name=csrf-token]").attr("content");

function Request(url, method, data = {}, success = () => {
}, error = () => {
}, headers = {}) {
    if (method.toUpperCase() === 'POST') {
        data = {
            ...data,
            _token: token
        }
    }

    $.ajax({
        url: url,
        type: method,
        data: data,
        headers: {
            'X-CSRF-TOKEN': token,
            ...headers
        },
        dataType: 'json',
        success: success,
        error: error,
    });
}

// Define a global function for the delete action
$(document).on('click', '.delete-button', function () {
    let endPoint = $(this).attr('data-endpoint');
    let redirectUrl = $(this).attr('data-host');
    Swal.fire({
        text: "Are you sure you would like to delete?",
        icon: "warning",
        showCancelButton: true,
        buttonsStyling: false,
        confirmButtonText: "Yes, delete it!",
        cancelButtonText: "No, return",
        customClass: {
            confirmButton: "btn btn-primary",
            cancelButton: "btn btn-active-light"
        }
    }).then(function (result) {
        if (result.isConfirmed) {
            Request(`${endPoint}`,
                'DELETE',
                {},
                () => {
                    if (redirectUrl) {
                        window.location.href = redirectUrl;
                    }
                    window.location.href = window.location.href;
                }, (e) => {
                    Swal.fire({
                        text: e.responseJSON.message,
                        icon: "warning"
                    });
                }
            );
        }
    });
});
