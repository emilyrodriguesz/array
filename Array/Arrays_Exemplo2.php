<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Arrays_Exemplo2</title>
	</head>
	<body>
		<?php
			$carro=array("Volvo","BMW","Toyota");
			$comprimento=count($carro);
			for($x=0;$x<$comprimento;$x++){
				echo $carro[$x]."<br>";
			}

		?>
	</body>
</html>