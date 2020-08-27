$(document).ready(function(){
	$(".nav .nav-link").on("click", function(){
	   $(".nav").find(".active").removeClass("active");
	   $(".nav").find(".linea").remove();
	   $(this).addClass("active").append('<div class="linea"></div>');
	});

	$(".numeroTelefono p").each(function(i){$(this).html("<a href='tel:"+$(this).text()+"'>"+$(this).text()+"</a>")})
	$(".numeroTelefono p a").attr("style","color:#fff");
});