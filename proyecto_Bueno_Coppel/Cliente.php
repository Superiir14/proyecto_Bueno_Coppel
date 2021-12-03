<?php include("header.php");?>
<section class="main">
		<div class="wrapp">
			<div class="mensaje">
				<h1>CLIENTES</h1>
			</div>

			

			<form action="/Cliente.php" method="get">
            <label for="fname">Nombre completo:</label>
            <input type="text" id="fname" name="fname"><br><br>
            <label for="lname">Correo electronico:</label>
            <input type="text" id="lname" name="lname"><br><br>
            <label for="cel">Numero de telefono:</label>
            <input type="text" id="cel" name="cel"><br><br>
            <input type="submit" value="Ingresar">
            <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</form>
		</div>
	</section>
	<?php include("footer.php");?>
</body>
</html>