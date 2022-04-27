<html>
	<head>
	
	</head>
	<body>
		<h1> Estatísticas 2 </h1>
		<?php
			$vetsexo = array();
			$vetclasse = array();
			$vetidade = array();
			
			//recebimento dos dados de cada aluno
			for ($cont = 1; $cont <= 100; $cont++) {
				$vetsexo[$cont] = $_POST["sexo".$cont];
				$vetclasse[$cont] = $_POST["classe".$cont];
				$vetidade[$cont] = $_POST["idade".$cont];
			}
			
			
			//identificação da maior e menor idade
			$maior_idade = 0;
			$menor_idade = 150;
			for ($cont = 1; $cont <= 100; $cont++){
			
				if ($vetidade[$cont] >= $maior_idade) {
					$maior_idade = $vetidade[$cont];
				}
				
				if ($vetidade[$cont] <= $menor_idade) {
					$menor_idade = $vetidade[$cont];
				}
				
			}
			echo "<p> A maior idade é $maior_idade <br>";
			echo " A menor idade é $menor_idade </p>";
			
			
			
			/*identificação dos alunos cuja idade está
			entre 18 e 35 pertencentes à classe D e E*/ 
			$qtd_1835_de = 0;
			for ($cont = 1; $cont <= 100; $cont++){
			
				if ((($vetidade[$cont] >= 18) and ($vetidade[$cont] <= 35)) and (($vetclasse[$cont] == "d") or ($vetclasse[$cont] == "e"))) {
					$qtd_1835_de++;
				}			
				
			}
			//cáculo do percentual
			$percentual_1835_de = ($qtd_1835_de * 100) / 100)
			echo " O percentual é $percentual_1835_de </p>";
				
			
			// qtd de alunas das classes D e A			
			$conta_sexo_feminino_classeA = 0;
			$conta_sexo_feminino_classeD = 0;
			for ($cont = 1; $cont <= 100; $cont++){
				if (($vetsexo[$cont] == "f") and ($vetclasse[$cont] == "a")) {
					$conta_sexo_feminino_classeA++;
				}
				
				if (($vetsexo[$cont] == "f") and ($vetclasse[$cont] == "d")) {
					$conta_sexo_feminino_classeD++;
				}
				
			}
			$total_alunas_AD = $conta_sexo_feminino_classeA + $conta_sexo_feminino_classeD;
			echo "<p> O total de alunas das classes A e D é $total_alunas_AD </p>";
			
			
			/*quantidade de mulheres entre 18 e 35 da classe E */ 
			$qtd_mulheres_1835_E = 0;
			for ($cont = 1; $cont <= 100; $cont++){
			
				if (($vetidade[$cont] >= 18) and ($vetidade[$cont] <= 35) and ($vetsexo[$cont == "f"]) and ($vetclasse[$cont] == "e")) {
					$qtd_mulheres_1835_E++;
				}			
				
			}
			echo "<p> A qtd de mulheres entre 18 e 35 anos da classe E é $qtd_mulheres_1835_E</p>";
			
			
			
			
		?>
		
	</body>
</html>