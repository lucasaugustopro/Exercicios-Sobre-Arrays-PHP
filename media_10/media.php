<html>
	<head>
	
	</head>
	<body>
		<h1> Preenchendo Arrays</h1>
		<?php
			$vet_valores = array();
			for ($cont = 1; $cont <= 10; $cont++) {
			
				$vet_valores[$cont] = $_POST["valor$cont"];
				
			}
			
			$soma = 0;
			for ($cont = 1; $cont <= 10; $cont++) {
				
				$soma = $soma + $vet_valores[$cont];
			
			}
			
			$media = $soma / 10;
			echo "<p> A média e $media </p>";
		?>
		
	</body>
</html>