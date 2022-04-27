<html>
	<head>	
		
	</head>
	<body>
		<h1> Médias com Array - MATRIZ </h1>		
		<form method="get" action="calcula_media.php">
			
			<?php
				$qtd_alunos = $_GET["qtd_alunos"];
				$qtd_avaliacoes = $_GET["qtd_avaliacoes"];
				for ($cont = 1; $cont <= $qtd_alunos; $cont++) {
			?>
					<p>
						Aluno <?php echo $cont; ?><br>
						Matrícula: <input type="text" name="matricula<?php echo $cont; ?>"> <br>
				<?php
					for ($cont_notas = 1; $cont_notas <= $qtd_avaliacoes; $cont_notas++) {
				?>
						Avaliação <?php echo $cont_notas; ?>: <input type="text" name="nota<?php echo "$cont$cont_notas"; ?>"> <br>
				<?php
					}
				?>
					</p>
			<?php
				}
			?>
			<input type="hidden" value="<?php echo $qtd_alunos; ?>" name="qtd_alunos">
			<input type="hidden" value="<?php echo $qtd_avaliacoes; ?>" name="qtd_avaliacoes">
			<p>
				<input type="submit" value="calcular">
			</p>
		</form>
	</body>
</html>