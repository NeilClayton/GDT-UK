var $theorycontent = $('#theory-content');
$theorycontent.on('show.bs.collapse','.collapse', function() {
    $theorycontent.find('.collapse.in').collapse('hide');
});

var $practicalcontent = $('#practical-content');
$practicalcontent.on('show.bs.collapse','.collapse', function() {
    $practicalcontent.find('.collapse.in').collapse('hide');
});

var $admincontent = $('#admin-content');
$admincontent.on('show.bs.collapse','.collapse', function() {
    $admincontent.find('.collapse.in').collapse('hide');
});

var $discountcontent = $('#discounts-content');
$discountcontent.on('show.bs.collapse','.collapse', function() {
    $discountcontent.find('.collapse.in').collapse('hide');
});

var $profilecontent = $('#profile-content');
$profilecontent.on('show.bs.collapse','.collapse', function() {
   $profilecontent.find('.collapse.in').collapse('hide');
});


$(document).ready(function() {
    $(".test").click(function () {
        $(".test").removeClass("active");
        $(this).addClass("active");
    });
    $(".question").click(function () {
        $(".question").removeClass("active");
        $(this).addClass("active");
    });
    $(".a-toggle").click(function () {
        $(".a-toggle").removeClass("active");
        $(this).addClass("active");
    });
    $(".discount").click(function () {
        $(".discount").removeClass("active");
        $(this).addClass("active");
    });
    $(".profile").click(function () {
        $(".profile").removeClass("active");
        $(this).addClass("active");
    });
});
