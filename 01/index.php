<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Rectangle function</title>
	<style>
	*{
		font-family: courier;
	}
	</style>
</head>
<body>
	<?php

		function rectangleIt($c1, $c2, $w,$h) {
			$resetc1 = $c1;//border character 
			$resetc2 = $c2;//inner character 

			$z = 1;
			while ( $z <= $h) { //loop height

				switch ($z) {
					case 1: //top border
						$i = 1;
						echo "&nbsp;";
						while ( $i <= $w) { //loop width
							echo $resetc1;
							$i++;
						}
						break;
					
					case $h: //bottom border
						$x = 1;
						echo "<br>";
						echo "&nbsp;";
						while ( $x <= $w) { //loop width
							echo $resetc1;
							$x++;
						}
						break;				

					default: 
						$y = 1;
						echo "<br>".$resetc1;
						while ( $y <= $w) {
							echo $resetc2;
							$y++;
						}
						echo $resetc1;
						break;
				}
				$z++;
			}


		}

		//function call
		rectangleIt("L","H","50","20");

	?>
</body>
</html>