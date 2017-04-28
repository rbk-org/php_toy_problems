<!-- 
Is Prime?
Write a php function called is_prime that checks the number if it's prime or not!
If number is prime print: "The number (X) is prime", if not print: "number (X) is not prime".
-->
<?php include '../includes/header.php' ?>

<form action="#" method="post">
	<input type="text" name="$number" placeholder="type number">
	<button>Is Prime</button>
</form>

<?php

function is_prime() {
	$n = $_POST['$number'];

	$flag = false;
	if ($n === "1") {
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

if(isset($_POST['$number'])) {
	is_prime();
}

?>
<?php include '../includes/footer.php' ?>