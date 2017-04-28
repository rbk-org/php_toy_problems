<!--  Given a single input string, write a function that outputs an array of strings with every possible
 combination of letters.

 At first, don't worry about repeated (duplicate) strings.

 What time complexity is your solution?

 Extra credit: De-duplicate your return array without using uniq().

  example usage:
  angrams('abc');
  echo(anagrams); // [ 'abc', 'acb', 'bac', 'bca', 'cab', 'cba' ] -->

  <?php include '../includes/header.php' ?>

  <form action="#" method="post">
  	<input type="text" name="$string" placeholder="type word">
  	<button>Get Military Time</button>
  </form>

  <?php

  function angrams(){

  	$string = $_POST['$string'];
  	$output = array();

  	for ($i = 0; $i < strlen($string); $i++) { 
  		array_push($output, $string[$i]);
  	}
  	print_r ($output);
  }

  if(isset($_POST['$string'])) {
  	angrams();
  } 

  ?>
  <?php include '../includes/footer.php' ?>








