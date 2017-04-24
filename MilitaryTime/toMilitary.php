
<!-- /*
Is Prime?
Write a php function called is_prime that checks the number if it's prime or not!
If number is prime print: "The number (X) is prime", if not print: "number (X) is not prime".
 */


 function is_prime($n){
   // code goes here


 }
 -->
<?php
echo "ola<br>";
function military_time($time){
	$t=0;
	$num= intval($time);
	if(strrpos($time, "pm") || strrpos($time, "am")){
		$x =substr($time,0,strlen($time)-2);
		///to get the 04:00  with out the pm or am ;
		//echo $x;
		if(strrpos($time, "pm") && $num !== 12){
			$t=12+$num;
		}else if($num == 12 &&strrpos($time, "am")){
			$t=0;
		}else{
			$t=$num;
		}
		if ($t<10){
			$t="0".$t;
		}
		echo str_replace($num, $t, $x);
	}else{
		echo $time;
	}
}
military_time('10:15am'); 

  ?>