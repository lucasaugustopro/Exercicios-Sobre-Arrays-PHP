<html>
	<head>
	
	</head>
	<body>
		<h1> Preenchendo Arrays</h1>
		<?php
			$vetor = array();
			for ($cont = 1; $cont <= 5; $cont++) {
			
				$vetor[$cont] = $_POST["vetpos".$cont];
				
			}
			
			echo "<h2> Exibir usando o FOR </h2>";
			for ($cont = 1; $cont <= 5; $cont++) {
			
				echo "<p> $vetor[$cont] </p>";
			
			}
			
			echo "<h2> Exibir usando o FOREACH </h2>";
			foreach ($vetor as $numero) {
				
				echo "<p> $numero </p>";
				
			}





			
			
		?>
		
	</body>
</html>