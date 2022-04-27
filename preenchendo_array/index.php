<html>
	<head>
	
	</head>
	<body>
		<h1> Preenchendo Arrays</h1>
		<form method="post" action="array.php">
			
			<?php
				for ($cont = 1; $cont <= 5; $cont++) 
				{
			?>
				Valor <?php echo "$cont"; ?>:
		<input type="text" name="vetpos<?php echo $cont; ?>" size="2"> <br>
			
			<?php
				}
			?>
			
			</p>
			<p> <input type="submit" value="enviar"> </p>		
		</form>
		
	</body>
</html>