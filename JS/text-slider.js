$("#slideshow > div:gt(0)").hide();

setInterval(function() { 
  $('#slideshow > div:first')
    .fadeOut(500)
    .next()
    .fadeIn(500)
    .end()
    .appendTo('#slideshow');
},  8000);

function overlay() {
  el = document.getElementById("overlay");
  el.style.visibility = (el.style.visibility == "visible") ? "hidden" : "visible";
}