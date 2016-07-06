function refreshWindow(){
    location.reload();
}

function overlay() {
    el = document.getElementById("overlay");
    el.style.visibility = (el.style.visibility == "visible") ? "hidden" : "visible";
}

function overlay_b() {
    el = document.getElementById("overlay-b");
    el.style.visibility = (el.style.visibility == "visible") ? "hidden" : "visible";
}

function overlay_b2() {
    el = document.getElementById("overlay-b2");
    el.style.visibility = (el.style.visibility == "visible") ? "hidden" : "visible";
}

function overlay_u() {
    el = document.getElementById("overlay-u");
    el.style.visibility = (el.style.visibility == "visible") ? "hidden" : "visible";
}

function overlay_u2() {
    el = document.getElementById("overlay-u2");
    el.style.visibility = (el.style.visibility == "visible") ? "hidden" : "visible";
}

function overlay_v() {
    el = document.getElementById("overlay-v");
    el.style.visibility = (el.style.visibility == "visible") ? "hidden" : "visible";
}

function overlay_v2() {
    el = document.getElementById("overlay-v2");
    el.style.visibility = (el.style.visibility == "visible") ? "hidden" : "visible";
}

function d_message() {
    el = document.getElementById("overlay-dm");
    el.style.visibility = (el.style.visibility == "visible") ? "hidden" : "visible";
}

$(document).ready(function() {
    $('.filter-this').filterTable({minRows: 0}); // apply filterTable to all tables on this page
});
