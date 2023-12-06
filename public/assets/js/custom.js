"use strict";

if (localStorage.getItem('color-scheme')) {
    let scheme = localStorage.getItem('color-scheme');

    const LTCSS = document.querySelectorAll('link[class=css-lt]');
    const DKCSS = document.querySelectorAll('link[class=css-dk]');

    [...LTCSS].forEach((link) => {
        link.media = (scheme === 'light') ? 'all' : 'not all';
    });

    [...DKCSS].forEach((link) => {
        link.media = (scheme === 'dark') ? 'all' : 'not all';
    });
}

$("#addRoom").on('click', function () {
    let roomName = $("#roomName").val();
    let roomDescription = $("#roomDescription").val();
    let roomIsPublic = $("#roomIsPublic").val();
    var selectedUserIds = $(".user-checkbox:checked").map(function () {
        return this.value;
    }).get();

    // Check if at least one user is selected
    if (selectedUserIds.length === 0) {
        Swal.fire({
            text: "Please select at least one user.",
            icon: "warning",
            showCancelButton: true,
            cancelButtonText: "Cancel",
        });
        return;
    }

    if (!roomName) {
        Swal.fire({
            text: "Room name must not be empty.",
            icon: "warning",
            showCancelButton: true,
            cancelButtonText: "Cancel",
        });

        return;
    }

    Request('/web-api/rooms',
        'POST',
        {
            name: roomName,
            description: roomDescription,
            is_public: roomIsPublic,
            selected_users: selectedUserIds
        },
        () => {
            window.location.href = window.location.href;
        }, (e) => {
            Swal.fire({
                text: e.responseJSON.message,
                icon: "warning"
            });
        }
    );
})
