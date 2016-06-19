function refreshWindow(){
    window.opener.location.reload();
    window.close();
}

function closeWindow(){
    window.close();
}

function overlay() {
    el = document.getElementById("overlay");
    el.style.visibility = (el.style.visibility == "visible") ? "hidden" : "visible";
}

function overlay_b() {
    el = document.getElementById("overlay-b");
    el.style.visibility = (el.style.visibility == "visible") ? "hidden" : "visible";
}

function overlay_u() {
    el = document.getElementById("overlay-u");
    el.style.visibility = (el.style.visibility == "visible") ? "hidden" : "visible";
}

function overlay_v() {
    el = document.getElementById("overlay-v");
    el.style.visibility = (el.style.visibility == "visible") ? "hidden" : "visible";
}

$(document).ready(function() {
    $('table').filterTable({minRows: 0}); // apply filterTable to all tables on this page
});