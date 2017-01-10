
<?php include 'headdos.php';?>


<body>

        <?php include 'menudos.php';?>

<span class="ir-arriba icon-chevron-up"></span>

<article class="bannercont" style="display:none;"></article>
<article class="titulocont" style="display:none;"><p>Gracias por ser su primera opción. Escribanos cualquier comentario por este medio.</p></article>

<form action="envia.php" method="post" class="form-register scrollflow -slide-left -opacity" style="display:none;">
	<h2 class="form_titulo">GRIZZLA</h2>
	<div class="contenedor-inputs">
		<input type="text" name="nombre" placeholder="Nombre" class="input-48" required=>
		<input type="text" name="apellido" placeholder="Apellidos" class="input-48" required>
		<!-- <input type="email" name="correo" placeholder="Correo" class="input-100" required> -->
		<input type="email" name="correo" placeholder="Correo" class="input-48" required>
		<input type="text" name="telefono" placeholder="Teléfono" class="input-48" required>
		<input type="text" name="comentario" placeholder="Comentario" class="input-100 areac" required>
		<input type="submit" value="Enviar" class="btn-enviar">
	</div>
</form>

<?php include 'pie.php';?>

<script src="../js/jquery.js"></script>
<script src="../js/menu.js"></script>
<script src="../js/eskju.jquery.scrollflow.min.js"></script>
<script type="text/javascript" src="../js/iconoarriba.js"></script>

<script type="text/javascript">
$(document).ready(function(){
	 $(document).ready(function () {
		 $('.header').fadeIn(2500);
		 $('.bannercont').fadeIn(2500);
		 $('.titulocont').fadeIn(2500);
		 $('footer').fadeIn(2500);
		 $('.form-register').fadeIn(2500);
	 });
});
</script>

</body>
</html>
