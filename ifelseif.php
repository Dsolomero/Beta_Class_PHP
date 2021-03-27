<?php 

$avgMarkScored = 35;

/*
Grade based on the marks scored
above 70   A
60-69      B
50-59      C
40-49      D
below 40   Fail

if -----else

if ----else if----else if----else

*/

if ($avgMarkScored>=70) {
	# code...
	//echo "A";	
	$gradeAwarded = "A";
}elseif ($avgMarkScored>=60) {
	# code...
	//echo "B";
	$gradeAwarded = "B";
}elseif ($avgMarkScored>=50) {
	# code...
	//echo "C";
	$gradeAwarded = "C";
}elseif ($avgMarkScored>=40) {
	# code...
	//echo "D";
	$gradeAwarded = "D";
}else{
	//echo "Fail";
	$gradeAwarded = "Fail";
}

?>

<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title>Grade</title>
</head>
<body>
	<h1>Award List</h1>

	<p style="font-size: 28px; color: #0F98F1">
		Average Mark: <span style="font-weight: bold;"><?php echo $avgMarkScored?> </span>	
	</p>

	<p style="font-size: 28px; color: #0F98F1">
		Grade Scored: <span style="font-weight: bold;"><?php echo $gradeAwarded?> </span>	
	</p>

</body>
</html>