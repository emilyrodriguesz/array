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
	
			for ($lin=0; $lin<3; $lin++) {
				for ($col=0; $col<3; $col++){
					echo $carro[$lin][$col]." ";
				}		
				echo "<br>";
			}

		?>
	</body>
</html>