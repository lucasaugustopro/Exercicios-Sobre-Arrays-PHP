<html>
	<head>
	
	</head>
	<body>
		<h1> Maior valor </h1>
		<?php
			$vet_num = array();
			for ($cont = 1; $cont <= 5; $cont++) {
			
				$vet_num[$cont] = $_GET["num".$cont];
				
			}
			
			$menor_num = 100;
			$maior_num = 0;
			for ($cont = 1; $cont <= 5; $cont++) {
				
				if ($vet_num[$cont] > $maior_num) {
					$maior_num = $vet_num[$cont];
				}

				if ($vet_num[$cont] < $menor_num) {
					$menor_num = $vet_num[$cont];
				}				
				
				
			}
			
			echo "<p> O maior número é $maior_num </p>";
			echo "<p> O menor número é $menor_num </p>";
		?>
		
	</body>
</html>