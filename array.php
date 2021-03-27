<?php 



/*
Array - special - variable
- can store multiple values
*/



$planets = array("Mercury","Venus","Earth","Mars","Jupiter","saturn");

//access this values

$x=20;
//display
/*
to access values stored -
   indexed
   0, last
   acccess
   arrayname[position]
*/

/*echo $planets[0];
echo "<br>";
echo $planets[1];
echo "<br>";
echo $planets[2];
echo "<br>";
echo $planets[3];
echo "<br>";
echo $planets[4];
echo "<br>";
echo $planets[5];
*/
echo "<br><u>List of Planets</u> <br>";
//while 0 - 20
$x=0;
while ($x<6) {
	# code...
	//echo "<br>$x <br>";
	echo $planets[$x];
	echo "<br>";
	$x++;
}

//using arrays store a list of 6 to 10 counties
//display them in a list html list and table 
/*
1
*/




?>