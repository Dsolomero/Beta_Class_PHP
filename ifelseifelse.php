<?php


/*

condition
more than 2 conditions

if else if ..else

Average marks scored
- marks scored  grade
marks - 78
marks - 24
marks - 56

-Grades
A - 70 and above
B - 60-69
C - 50-59
D - 40-49
F - Below 40
*/
echo "<h2>Marks Grading</h2>";
$markScored = 5;
echo "<h3>Average Mark Scored $markScored</h3>";

if ($markScored>=70) {
	# code...
	echo "A";
}else if ($markScored>=60) {
	# code...
	echo "B";
}elseif ($markScored>=50) {
	# code...
	echo "C";
}elseif ($markScored>=40) {
	# code...
	echo "D";
}else{
	echo "F";
}

/*
Write a PHP Program
Give a country tel code. display the country name

254 - Kenya
255 - Tanzania
256 - Uganda
250 - Rwanda
257 - Burundi

*/
echo "<hr>";
echo "<br>Country Tel Code";
echo "<br>";

$countryTelCode = 258;

if ($countryTelCode==254) {
	# code...
	echo "Kenya";
}elseif ($countryTelCode==255) {
	# code...
	echo "Tanzania";
}elseif ($countryTelCode==250) {
	# code...
	echo "Rwanda";
}elseif ($countryTelCode==257) {
	# code...
	echo "Burundi";
}else{ 
	echo "I think $countryTelCode does not much with any East African Country";

}






?>