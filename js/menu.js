$(document).ready(function(){
  $("#menu-responsive").click(function(){
    $("#contenedor").show(100);
  });

  $("#cerrar").click(function(){
    $("#contenedor").hide();
  });

  $("#menu-responsive2").click(function(){
    $("#contenedor2").show(100);
    $("#cerrar2").show(100);
    $("#menu-responsive2").hide(100);
  });

  $("#cerrar2").click(function(){
    $("#contenedor2").hide();
    $("#menu-responsive2").show(100);
    $("#cerrar2").hide();
  });
});
