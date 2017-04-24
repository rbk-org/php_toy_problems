
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
