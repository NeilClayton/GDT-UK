$(document).ready(function(){
    $("#hide").click(function(){
        $("#fb").toggle();
		$("#call").toggle();
		$("#email").toggle();
    });
});

$(document).ready(function(){
	$('#hide').click(function(){
		$(this).find('i').toggleClass('fa-chevron-left fa-chevron-right')
	});
});