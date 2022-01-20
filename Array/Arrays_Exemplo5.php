<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Arrays_Exemplo5</title>
	</head>
	<body>
		<?php
			$carro=array(
				array("Volvo",22,18),
				array("BMW",15,13),
				array("Land Rover",17,15)
			);
			
			echo $carro[0][0]." ";
			echo $carro[0][1]." ";
			echo $carro[0][2]." ";
			echo "<br>";
			echo $carro[1][0]." ";
			echo $carro[1][1]." ";
			echo $carro[1][2]." ";
			echo "<br>";
			echo $carro[2][0]." ";
			echo $carro[2][1]." ";
			echo $carro[2][2]." ";
			
			
		?>
	</body>
</html>