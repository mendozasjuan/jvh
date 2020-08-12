$(document).ready(function(){
	$(".nav .nav-link").on("click", function(){
	   $(".nav").find(".active").removeClass("active");
	   $(".nav").find(".linea").remove();
	   $(this).addClass("active").append('<div class="linea"></div>');
	});
});