

<!-- Is Prime?
Write a php function called is_prime that checks the number if it's prime or not!
If number is prime print: "The number (X) is prime", if not print: "number (X) is not prime".
 


 function is_prime($n){
   // code goes here

var_dump='lala';

 } -->

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php 


echo "Hello World!<br>";




function is_prime($n){
 	for ($x=2 ; $x<$n ; $x++) {
    
    if($n%$x == 0){
    	echo  "is not prime ";
    	break;
    }else {
 		echo "is  prime ";
 	}
 }
}
 is_prime(4);

 ?>
</body>
</html>