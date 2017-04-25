<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<form method="post">
<input type="text" name="ok">
<input type="submit" name="ok2"/>

</form>
<body>

<?php
  function isPrime(){
    $flage = true;
    for($i=2 ; $i<$_POST['ok'] ; $i++){
       if($_POST['ok'] % $i == 0){
          $flage = false;
         }
      }
   if($flage == true){
       echo "<br>is prime :)";
   }else{
       echo "<br>is not prime :(";
    }
}
if(isset($_POST['ok2'])){
  isPrime();
}
 
?>

</body>
</html>







/*
Is Prime?
Write a php function called is_prime that checks the number if it's prime or not!
If number is prime print: "The number (X) is prime", if not print: "number (X) is not prime".
 */


 function is_prime($n){
   // code goes here


 }
