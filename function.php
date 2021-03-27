<?php

/*
Function - does a specific job
n=bundled set of statements
- specific

syntax

function keyword - followed by functionName
- ()
{
	//set of statement 
}
-function- descriptive of its task
-verb
*/
//NOTE - create a function
//begin to work
//create a function to say hello
echo "<h1>Function</h1>";
function sayHello(){
	echo "Good morning Beta";

}

function addNumbers(){
	echo (20+30);

}
//call the function functionName();

sayHello();
echo "<br>";
addNumbers();

//create a function to say your name

echo "<h1>My Name</h1>";
function SayMyName(){
	echo "Douglas Solomero";

}
sayMyName();
/*
Arguments - in the form of variables()
*/

function addTwoNumbers($num1,$num2){
	echo "<br>";
	echo $num2+$num1;

}

addTwoNumbers(10,30);
addTwoNumbers(45,89);
addTwoNumbers(234,78);

function sayMyNamePlease($name){
	echo "<br>";
	echo "Hey $name";

}
sayMyNamePlease("Douglas");
sayMyNamePlease("John");
//create a function to calculate average marks

$marks = array(45, 78,98,90,76,45,34,67,89);
//create a functionthat will receive the above array of marks and calculate their average

function findAverageMark($marks){
	//find average
	//sum - 
	//divide by the number
	//
	$countOfMarks = count($marks);
	$sum =0;
	for($i=0;$i<$countOfMarks;$i++){
		$sum+=$marks[$i]; //sum+$marks[$1];
	}

	//calculate the average
	$average = $sum/$countOfMarks;

	//echo "The avearage mark is $average";
	return $average;
}
echo "<br>";
$avg =findAverageMark($marks);
echo "The avarage mark is <b>".round($avg,2). "</b>";
echo "<br>";
$otheravg = findAverageMark(array(60,89,78,65));
echo "The other average mark scored is <b>$otheravg</b>";




?>