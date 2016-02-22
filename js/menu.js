
$(document).ready(function(){

 var contador = 1;

// function main(){
	$('.menubar').click(function(){

		if(contador == 1){
			$('.contenMenu').animate({
				left: '1'
			});
			contador = 0;
		} else {
			$('.contenMenu').animate({
				left: '-100%'
			});
			contador = 1;
		}
 
	});
});


$(document).ready(function(){
// function oculta(){
	$('a').click(function(){
 			$('.contenMenu').animate({
				left: '-100%'
				// hide();
			});
 		});
	
});



