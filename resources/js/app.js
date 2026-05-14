import './bootstrap';

document.addEventListener("DOMContentLoaded", () => {
    document.getElementById("current_year").textContent = new Date().getFullYear();
});

$(document).ready( () => {

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
});
