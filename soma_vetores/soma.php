<html>
	<head>
	
	</head>
	<body>
		<h1> Soma de vetores </h1>
		<?php
			$vetorA = array();
			$vetorB = array();
			$soma = array();
			
			for ($cont = 1; $cont <= 2; $cont++) {
			
				$vetorA[$cont] = $_POST["vetorApos".$cont];
				$vetorB[$cont] = $_POST["vetorBpos".$cont];
				
			}
			
			for ($cont = 1; $cont <= 2; $cont++){
				$soma[$cont] = $vetorA[$cont] + $vetorB[$cont];
				
			}
			
			foreach ($soma as $resultado) {
				echo "<p> $resultado </p>";
			}
			
		?>
		
	</body>
</html>