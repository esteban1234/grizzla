$(document).ready(function() {
    var cambio = false;
    $('.nav li a').each(function(index) {
        if (this.href.trim() == window.location) {
            $(this).parent().addClass("select");
            cambio = true;
        }
    });
    if (!cambio) {
        $('.nav li:first').addClass("select");
    }
});
