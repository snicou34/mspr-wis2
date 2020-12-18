require('jquery-sticky');

/*** ---- EXERCICE 2 ---- ***/

document.addEventListener('DOMContentLoaded', function() {
    $("#sticker-list").sticky({
        topSpacing: 130
    });
    $("#sticker-options").sticky({
        topSpacing: 130
    });
});