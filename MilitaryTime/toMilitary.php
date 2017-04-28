
<!-- Given a string that represents time in hours and minutes, convert the string to military time (if necessary)..
-->

<?php include '../includes/header.php' ?>

<form action="#" method="post">
	<input type="text" name="$time" placeholder="type time">
	<button>Get Military Time</button>
</form>

<?php

function toMilitary () {
	$str = "";	
	$time = $_POST['$time'];


	if (substr($time, -2) === "am") {
		$time = str_split($time);
		array_splice($time, -2);
		$time = join('', $time);
		if (strlen($time) === 4) {
			$time = "0" . $time;
		}
		if (substr($time, 0, -3) === "12") {
			$time = "00" . substr($time, -3);
		}
	}

	elseif (substr($time, -2) ==="pm") {
		$time = str_split($time);
		array_splice($time, -2);
		$time = join('', $time);	

		if (substr($time, 0, -3) !== "12") {
			$str = substr($time, -3);
			$time = str_split($time);	
			array_splice($time, -2);
			$time = join('', $time);
			$time = str_split($time);
			array_splice($time, -1);
			$time = join('', $time);
			$time = strval((intval($time) + 12)) . $str;

		}
	}
	echo $time;
}

if(isset($_POST['$time'])) {
	toMilitary();
} 

?>
<?php include '../includes/footer.php' ?>