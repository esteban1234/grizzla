<!DOCTYPE html>

<?php include 'headdos.php';?>


<body>

        <?php include 'menudos.php';?>

<span class="ir-arriba icon-chevron-up"></span>

<article class="bannerser" style="display:none;"></article>
<article class="titulocont" style="display:none;"><p>Contamos con un área específica para cada necesidad de su negocio.</p></article>

<article class="contenser">
	<article class="ser">
		<article class="publicidad scrollflow -slide-left -opacity">
			<p class="tit_publi">PUBLICIDAD</p>
			<article class="contenimgpuntos">
				<img class="img" src="../img/publicidad.jpg" width="250" height="250" alt="">
				<article class="puntospu">
					<li>Anuncios</li>
					<li>Lonas</li>
					<li>Fliyers</li>
					<li>Banners</li>
					<li>Unipolares</li>
					<li>De neón</li>
				</article>
			</article>
		</article>

		<article class="publicidad2 scrollflow -slide-right -opacity">
			<p class="tit_publi">Material para publicidad</p>
			<article class="contenimgpuntos">
				<img class="img" src="../img/vinilos.png" width="250" height="250" alt="">
				<article class="puntospu">
					<li>Lonas</li>
					<li>Textiles</li>
					<li>Vinilos</li>
					<li>Barnices</li>
					<li>Displays</li>
					<li>Laminados</li>
				</article>
			</article>
		</article>
	</article>

<article class="ser2 scrollflow -slide-left -opacity">
	<article class="perifoneo">
		<article class="fondo">
			<p class="fondop">PERIFONEO</p>
		</article>
	</article>

	<article class="marketing">
		<article class="fondo">
			<p class="fondop">MARKETING</p>
		</article>
	</article>

	<article class="e-marketing">
		<article class="fondo">
			<p class="fondop">e-MARKETING</p>
		</article>
	</article>
</article>

<article class="ser2 scrollflow -slide-left -opacity">
	<article class="carteleras">
		<article class="fondo">
			<p class="fondop">CARTELERAS</p>
		</article>
	</article>

	<article class="toldos">
		<article class="fondo">
			<p class="fondop">TOLDOS LUMINOSOS</p>
		</article>
	</article>

	<article class="anuncios">
		<article class="fondo">
			<p class="fondop">ANUNCIOS ELECTRICOS</p>
		</article>
	</article>
</article>

<article class="boton">
      <!-- <p class="btnserv"><a href="">Servicios</a></p> -->
      <a class="a" href="contacto.php"><p class="btnserv">Contactános</p></a>
    </article>
</article>


<?php include 'pie.php';?>


<script src="../js/jquery.js"></script>
<script src="../js/menu.js"></script>
<script src="../js/eskju.jquery.scrollflow.min.js"></script>
<script type="text/javascript" src="../js/iconoarriba.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	 $(document).ready(function () {
		 $('.header').fadeIn(2500);
		 $('.bannerser').fadeIn(2500);
		 $('.titulocont').fadeIn(2500);
		 $('footer').fadeIn(2500);
	 });
});
</script>

</body>
</html>
