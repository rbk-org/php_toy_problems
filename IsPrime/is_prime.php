<!-- 
Is Prime?
Write a php function called is_prime that checks the number if it's prime or not!
If number is prime print: "The number (X) is prime", if not print: "number (X) is not prime".
-->
<!DOCTYPE html>
<html>
<head>
	<title>php-toy-problem</title>
</head>
<body>

	<?php

	function is_prime($n) {
		if ($n === 1) {
			echo "Number 1 is not Prime <br>";
		}
		for ($i = 2; $i <$n ; $i++) { 
			if ($n % $i === 0) {
				echo "Number $n is not Prime <br>";
			}
			elseif (!$n % $i === 0) {
				echo "Number $n is Prime <br>";
			}
		}
	}
	is_prime(1);
	is_prime(3);
	is_prime(5);
	is_prime(6);
	is_prime(7);
	is_prime(8);
	is_prime(9);
	is_prime(10);
	?>
</body>
</html>

