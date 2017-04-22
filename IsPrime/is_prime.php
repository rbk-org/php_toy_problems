<!-- 
Is Prime?
Write a php function called is_prime that checks the number if it's prime or not!
If number is prime print: "The number (X) is prime", if not print: "number (X) is not prime".
-->
<html>
<head>
	<title>php-toy-problem</title>
</head>
<body>

	<?php

	function is_prime($n) {
		$flag = false;
		if ($n === 1) {
			echo "Number $n is not Prime <br>";
		}
		elseif ($n > 1) {
			for ($i = 2; $i <$n ; $i++) { 
				if ($n % $i === 0) {
					$flag = true;
				}
			}
			if (!$flag) {
				echo "Number $n is Prime <br>";
			}
			elseif ($flag) {
				echo "Number $n is not Prime <br>";
			}
		}
	}

	is_prime(1);
	is_prime(2);
	is_prime(3);
	is_prime(5);
	is_prime(6);
	is_prime(7);
	is_prime(8);
	is_prime(9);
	is_prime(10);
	is_prime(11);
	is_prime(12);
	is_prime(13);
	is_prime(14);
	is_prime(15);
	?>
<!-- 
	<script>
		function isPrime (n) {
			if (n === 1) {
				return false;
			}

			for (var i = 2; i <= n; i++) {
				if (n % i !== 0 || n === 2) {
					return true;
				}
				else {
					return false;
				}
			}
		}

	</script> -->
</body>
</html>

