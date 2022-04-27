<html>
	<head>
	
	</head>
	<body>
		<h1> Média de 10 valores </h1>
		<form method="post" action="media.php">
			<p>
			<?php
				for ($cont = 1; $cont <= 10; $cont++) 
				{
			?>
				Valor <?php echo "$cont"; ?>:
				<input type="text" name="valor<?php echo $cont; ?>" size="2"> <br>
			
			<?php
				}
			?>
			
			</p>
			<p> <input type="submit" value="enviar"> </p>		
		</form>
		
	</body>
</html>