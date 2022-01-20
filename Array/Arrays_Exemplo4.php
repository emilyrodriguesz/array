<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Arrays_Exemplo4</title>
	</head>
	<body>
		<?php
			$info=array("Edison"=>"46","Pedro"=>"37","Maria"=>"25");
			foreach ($info as $x=>$x_valor){
				echo "chave=".$x."Valor=".$x_valor;
				echo "<br>";
			}
		?>
	</body>
</html>