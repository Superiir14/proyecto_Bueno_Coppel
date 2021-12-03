<?php include("header.php");?>
<section class="main">
		<div class="wrapp">
			<div class="mensaje">
				<h1>ARTICULOS</h1>
			</div>

			<form action="/Cliente.php" method="get">
            <label for="fname">Nombre del producto:</label>
            <input type="text" id="fname" name="fname"><br><br>
            <label for="lname">Etiqueta del producto:</label>
            <input type="text" id="lname" name="lname"><br><br>
            <label for="cel">Codigo del producto:</label>
            <input type="text" id="cel" name="cel"><br><br>
            <input type="submit" value="Ingresar">
			<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
			

		</div>
	</section>
	<?php include("footer.php");?>
</body>
</html>