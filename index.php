<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>
		
		<?php 

			// $a = "a";
			// $b = "<b>";
			// $c = "c";

			// echo $a . htmlspecialchars($b) . $c;

			// for ($i=1; $i <= 100; $i++) { 
			// 	if ($i % 3 == 0 && $i % 5 == 0) {
			// 		echo "fizzbuzz<br>";
			// 	} elseif ($i % 3 == 0) {
			// 		echo "fizz<br>";
			// 	} elseif ($i % 5 == 0) {
			// 		echo "buzz<br>";
			// 	} else {
			// 		echo $i . "<br>";
			// 	}
				
			// }
			
			for ($i=1; $i <= 100; $i++) { 
				if ($i % 3 == 0 && $i % 5 == 0) {
					echo "fizzbuzz<br>";
				} elseif ($i % 3 == 0) {
					echo "fizz<br>";
				} elseif ($i % 5 == 0) {
					echo "buzz<br>";
				} else {
					echo $i . "<br>";
				}
				
			}

		 ?>
	</h1>
</body>
</html>