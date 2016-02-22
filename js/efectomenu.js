$(document).on("ready", main);
function main () {
	$("#menu a").on("click", irA);
	$(window).scroll(scrollMenu);
	
}

function irA(){
	var seccion = $(this).attr("href");
	$("body, html").animate({
		scrollTop: $(seccion).offset().top - 80
	}, 900);

	return false;
}

function scrollMenu(){
	var secciones = [$("#inicio").offset().top, $("#quien").offset().top, $("#servicios").offset().top, $("#portafolio").offset().top, $("#contacto").offset().top, $("body").height()];

	var submenu = $("#menu");
	var altoquien = $("#quien").outerHeight();

	height = $(event.target).scrollTop();

	if(height > 530 ){
		submenu.addClass('active2');
		// $(".logo").css("display", "none");
		// $(".subMenu").css("height",70, "border","2px solid green");
		// $(".subNavBtn").css("height",15, "padding","25px 2% 0 2%");
	}
	else
	{
		// $(".logo").css("display", "inline-block");
		submenu.removeClass('active2');
	}


	if($(this).scrollTop() > secciones[0]-90 && $(this).scrollTop() < secciones[1]-90){
		$("#menu a").eq(0).addClass("active");
		$(".submenu").addClass("active2");
	}
	else{
		$("#menu a").eq(0).removeClass("active");
			
	}

	if($(this).scrollTop() > secciones[1]-90 && $(this).scrollTop() < secciones[2]-90){
		$("#menu a").eq(1).addClass("active");
	}
	else{
		$("#menu a").eq(1).removeClass("active");
			
	}

	if($(this).scrollTop() > secciones[2]-90 && $(this).scrollTop() < secciones[3]-90){
		$("#menu a").eq(2).addClass("active");
	}
	else{
		$("#menu a").eq(2).removeClass("active");
			
	}

	if($(this).scrollTop() > secciones[3]-90 && $(this).scrollTop() < secciones[4]-150){
		$("#menu a").eq(3).addClass("active");
	}
	else{
		$("#menu a").eq(3).removeClass("active");
			
	}

	if($(this).scrollTop() > secciones[4]-150 && $(this).scrollTop() < secciones[5]-90){
		$("#menu a").eq(4).addClass("active");
	}
	else{
		$("#menu a").eq(4).removeClass("active");
			
	}
}