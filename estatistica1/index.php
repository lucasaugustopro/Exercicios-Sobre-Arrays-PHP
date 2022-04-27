<html>
	<head>
	
	</head>
	<body>
		<h1> Estatísticas 1 </h1>
		
		<form method="post" action="gera_estatistica.php">
			<?php
				for ($cont=1; $cont <= 10; $cont++) {
			?>
					<p>
						<?php echo "$cont";?>ª pessoa <br>
					
						Sexo: 
						<input type="radio" name="sexo<?php echo "$cont";?>" value="m" checked> Masculino 
						<input type="radio" name="sexo<?php echo "$cont";?>" value="f"> Feminino
						<br>
						Altura: 
						<input type="text" name="altura<?php echo "$cont";?>" size="2"> 
					</p>
			<?php
				}
			?>
			
			<p> <input type="submit" value="Calcular estatísticas"> </p>		
		</form>
		
		
	</body>
</html>