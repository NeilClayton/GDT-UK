var $collcontent = $('#coll-content');
$collcontent.on('show.bs.collapse','.collapse', function() {
    $collcontent.find('.collapse.in').collapse('hide');
});

$(document).ready(function() {
    $(".coll-toggle").click(function () {
        $(".coll-toggle").removeClass("active");
        $(this).addClass("active");
    });
    $(".question").click(function () {
        $(".question").removeClass("active");
        $(this).addClass("active");
    });
});
