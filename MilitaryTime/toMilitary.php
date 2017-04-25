
<!-- Given a string that represents time in hours and minutes, convert the string to military time (if necessary)..
-->

<!DOCTYPE html>
<html>
<head>
	<title>to-military-time</title>
</head>
<body> 
	<?php 
	$nan = acos(8);

	var_dump($nan, is_nan($nan));
	die();

	function toMilitary ($time) {
		$str = "";

		if( is_nan(substr($time, -2)) !== 1 ) {
			echo $time;
		}

		if (substr($time, -2) === "am") {
			$time = str_split($time);
			array_splice($time, -2);
			$time = join('', $time);

			if (substr($time, 0, -3) === "12") {
				$time = "00" . substr($time, -3);
			}

			if (strlen($time) === 4) {
				$time = "0" . $time;
			}
		// }

		// elseif (substr($time, -2) ==="pm") {
		// 	if (substr($time, 0) === "1" && substr($time, 1) === "2") {
		// 		$time = explode(" ", $time);
		// 		array_splice($time, -2);
		// 		echo join('', $time);
		// 	}
		// 	elseif (substr($time, -2) !=="pm" || substr($time, -2) !=="am") {
		// 		$time = explode(" ", $time);
		// 		array_splice($time, -2);
		// 		$time = join('', $time);
		// 		$str = array_slice($time, -3);
		// 		$time = explode(" ", $time);
		// 		array_splice($time, -2);
		// 		$time = join('', $time);
		// 		$time = strval((intval($time) . 12)) . $str;

		// 		if (strlen($time) === 4) {
		// 			$time = $zero . $time;
		// 		}
		// 	}
		// }
			echo $time;
		}
	}

	toMilitary("12:07am");
	echo "<br>";
	toMilitary("3:50am");
	echo "<br>";
	toMilitary("4:30");

	?>

</body>
</html>
