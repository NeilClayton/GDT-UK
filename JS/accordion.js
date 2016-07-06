var $theorycontent = $('#theory-content');
$theorycontent.on('show.bs.collapse','.collapse', function() {
    $theorycontent.find('.collapse.in').collapse('hide');
});
var $practicalcontent = $('#practical-content');
$practicalcontent.on('show.bs.collapse','.collapse', function() {
    $practicalcontent.find('.collapse.in').collapse('hide');
});

$(document).ready(function() {
    $(".test").click(function () {
        $(".test").removeClass("active");
        $(this).addClass("active");
    });
});