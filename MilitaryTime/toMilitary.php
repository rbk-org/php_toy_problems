
<<<<<<< HEAD
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>

<body>
<form method="post">
<input type="text" name="time">
<input type="submit" name="but">
</form>
<?php
function toMiller(){

  $time=$_POST['time'];
  $am=strpos($time,'am');
  $pm=strpos($time,'pm');
  $d=strpos($time,':');
  $part=substr($time,0,$d);
 if($pm !== false && $part!==12){
     $x=$part+12;
     $pm2=substr($time,$d);
     echo $x.$pm2;
     die();
      }
else if($am !== false){
      if(substr($time,0,2) !== 12){
      echo "0". substr($time,0,$am);
      die();
     }else{
       echo "00".substr($time,$d,$am);
       die();
     }
}
echo substr($time,0,5);
}
if(isset($_POST['but'])){
	toMiller();
}
?>

</body>
</html>
=======
/*
Is Prime?
Write a php function called is_prime that checks the number if it's prime or not!
If number is prime print: "The number (X) is prime", if not print: "number (X) is not prime".
 */


 function is_prime($n){
   // code goes here


 }
>>>>>>> ce4de5ff9dbb689381f9c8cf4fbbaaaa294d4dad
