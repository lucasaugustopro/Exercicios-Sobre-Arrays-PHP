<html>
	<head>
	
	</head>
	<body>
		<h1> Estatísticas 1 </h1>
		<?php
			$vetsexo = array();
			$vetaltura = array();
			
			//recebimento dos dados de cada pessoa (sexo e altura)
			for ($cont = 1; $cont <= 10; $cont++) {
				$vetsexo[$cont] = $_POST["sexo".$cont];
				$vetaltura[$cont] = $_POST["altura".$cont];
			}
			
			//contagem dos sexos (masculinos e femininos)
			$conta_sexo_masculino = 0;
			$conta_sexo_feminino = 0;
			for ($cont = 1; $cont <= 10; $cont++){
				if ($vetsexo[$cont] == "m") {
					$conta_sexo_masculino++;
				}
				else {
					$conta_sexo_feminino++;
				}
			}
			
			//identificação da maior altura e o sexo desta pessoa
			$maior_altura = 0;
			for ($cont = 1; $cont <= 10; $cont++){
			
				if ($vetaltura[$cont] >= $maior_altura) {
					$maior_altura = $vetaltura[$cont];
					$sexo_maior_altura = $vetsexo[$cont];
				}
				
			}
			
			//saída das informações solicitadas
			echo "<p> A quantidade de pessoas do sexo masculino é $conta_sexo_masculino </p>";
			echo "<p> A quantidade de pessoas do sexo feminino é $conta_sexo_feminino </p>";
			if ($sexo_maior_altura == "m") {
				echo "<p> A maior altura é $maior_altura de uma pessoa do sexo masculino </p>";
			}
			else {
				echo "<p> A maior altura é $maior_altura de uma pessoa do sexo feminino </p>";
			}
		?>
		
	</body>
</html>