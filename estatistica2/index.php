<html>
	<head>
	
	</head>
	<body>
		<h1> Estatísticas 2 </h1>
		
		<form method="post" action="resultado.php">
			<?php
				for ($cont=1; $cont <= 100; $cont++) {
			?>
				<p>
					<?php echo "$cont";?>º aluno 
					<br>
					
					Sexo:
					<br>						
					<input type="radio" name="sexo<?php echo "$cont";?>" value="m" checked> Masculino 
					<br>
					<input type="radio" name="sexo<?php echo "$cont";?>" value="f"> Feminino
					<br>
					
					Classe social:
					<select name="classe<?php echo "$cont";?>">
						<option value="a"> Classe A </option>
						<option value="b"> Classe B </option>
						<option value="c"> Classe C </option>
						<option value="d"> Classe D </option>
						<option value="e"> Classe E </option>
					</select>
					<br>
				
					Idade: 
					<input type="text" name="idade<?php echo "$cont";?>" size="2"> 					
				</p>
			<?php
				}
			?>
			
			<p> <input type="submit" value="Calcular estatísticas"> </p>		
		</form>
		
		
	</body>
</html>