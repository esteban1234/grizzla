<!DOCTYPE html>

<?php include 'vistas/head.php';?>


<body id="body1">

		<?php include 'vistas/menu.php';?>

		<!-- <h1 class="titulo" style="display:none;">AGENCIA DE PUBLICIDAD</h1> -->

	<figure class="logo" style="display:none;">
    </figure>


    <article class="slogan" style="display:none;"><p>Con buena publicidad, vendes mas!!</p></article>
    <article class="slogan2" style="display:none;"><a href="vistas/contacto.php">Contáctanos</a></article>

    <script src="js/jquery.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	 $(document).ready(function () {
		 $('.titulo').fadeIn(2500);
		 $('.header').fadeIn(2500);
		 $('.logo').fadeIn(2500);
		 $('.slogan').fadeIn(2500);
		 $('.slogan2').fadeIn(2500);
	 });
});
</script>

</body>
</html>
