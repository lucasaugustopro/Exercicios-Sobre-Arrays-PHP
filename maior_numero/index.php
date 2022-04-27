<html>
	<head>
	
	</head>
	<body>
		<h1> Maior número </h1>
		<form method="get" action="maior.php">
			
			<?php
				for ($cont = 1; $cont <= 5; $cont++) 
				{
			?>
				<?php echo "$cont"; ?>º número:
				<input type="text" name="num<?php echo $cont; ?>" size="2"> <br>
			
			<?php
				}
			?>
			
			</p>
			<p> <input type="submit" value="enviar"> </p>		
		</form>
		
	</body>
</html>