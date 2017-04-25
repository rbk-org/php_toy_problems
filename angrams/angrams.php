<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
/**
 * Given a single input string, write a function that outputs an array of strings with every possible
 * combination of letters.
 *
 * At first, don't worry about repeated (duplicate) strings.
 *
 * What time complexity is your solution?
 *
 * Extra credit: De-duplicate your return array without using uniq().
 */

/**
  * example usage:
  * var anagrams = allAnagrams('abc');
  * console.log(anagrams); // [ 'abc', 'acb', 'bac', 'bca', 'cab', 'cba' ]
  */


angrams("abc");



function angrams($string){
	$str='';
	$arr=array();
	array_push($arr,$string);
	for($i=0 ; $i<count($string) ; $i++){
	    $x=$string;
        $str=$x[$i];
        str_replace($x,$x[$i],'');
      	$str+=$x;
      	array_push($arr,$str);
      	array_push($arr,strrev($str));
      	$str='';
      }
     print_r($arr);
      }



?>

</body>
</html>

