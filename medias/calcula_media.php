<html>
	<head>	
		
	</head>
	<body>
		<h1> Médias com Array - MATRIZ </h1>		
		<?php
			//entrada de dados
			
			$boletim = array();
			$soma_notas = 0;
			$qtd_alunos = $_GET["qtd_alunos"];
			$qtd_avaliacoes = $_GET["qtd_avaliacoes"];
			// primeiro for para cada usuário
			for ($cont = 1; $cont <= $qtd_alunos; $cont++) {
				
				$boletim[$cont,0] = $_GET["matricula$cont"];
				// segundo for para cada nota
				for ($cont_nota = 1; $cont_nota <= $qtd_avaliacoes; $cont++) {
					$boletim[$cont,$cont_nota] = $_GET["nota".$cont_nota.$cont];
					$soma_notas = $soma_notas + $boletim[$cont,$cont_nota];
				}
				$boletim[$cont,$qtd_avaliacoes + 1] = $soma_notas / $cont_nota;
				echo "<p> O aluno de matrícula $boletim[$cont,0] obteve média $boletim[$cont,$qtd_avaliacoes + 1] </p>";
			}
		
		?>
	</body>
</html>