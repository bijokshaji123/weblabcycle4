<!DOCTYPE html>
<html lang="en">
<head>

<title>Factorial calculator</title>
</head>
<body>

<h2>Factorial Calculator</h2>

<form method="POST" action="">
	<label for="number"> Enter a number:</label>
	<input type="text" id="number" name="number" required>
	<input type="SUBMIT" value="Calculator factorial">
</form>

<?php

function factorial($n){
	if($n==0||$n==1){
		return 1;
	}else{
	         return $n * factorial($n-1);
	}
                 }
if($_SERVER["REQUEST_METHOD"]=="POST"  &&  isset($_POST[  'number' ])){

$number=$_POST['number'];

if(ctype_digit($number)){
	$result=factorial($number);

echo "<p>The factorial of  $number is  $result.</p>";
}else{
	echo"<p>please enter a valid integer.</p>";
	}
}
?>

</body>
</html>	