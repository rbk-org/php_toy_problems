<!-- 
/*
Is Prime?
Write a php function called is_prime that checks the number if it's prime or not!
If number is prime print: "The number (X) is prime", if not print: "number (X) is not prime".
 */


 function is_prime($n){
   // code goes here


 }
 -->

 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 <?php
 echo "hello world <br>";
  function is_prime($n){
   for($x=2 ; $x<$n ; $x++){
   		if($n%$x == 0 ){
   		echo 'Not prime';
   		break;
   		}
   		echo 'prime';
   		break;
   }
}
is_prime(11)
   ?>
 </body>
 </html>