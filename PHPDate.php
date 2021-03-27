<?php 
/*
How does php help us to work with date & time

*/
///get today's date

/*

when you capture the date 
date()
- date - arguments
- format
- timestamp
d/m/y - 12/03/21

*/

echo "<h2>Today</h2>";
echo (date('dd/mm/yyyy'));

echo "<br>";


?>

<br>

<form method="POST" action="">
	<label>Age</label>
	<input type="number" name="age"><br>
	<input type="submit" name="calc" value="Get YOB">
	
</form>

<?php
//capture date from
if (isset($_POST{'calc'})) {
	# code...
	$age = $_POST['age'];

	$currentYear = date("Y");//2021
	$yob = $currentYear-$age;
	echo "<h4>You were ";
}


?>