<?php 
/**
1
2
3
4
5
6
7
8
9
10

x = 0
x++; // x+1
echo x =1
x++; =2

*/
$x = 0;
echo "$x<br>";
$x++; //1
echo "$x<br>";
$x++; //2
echo "$x<br>";
$x++; //3
echo "$x<br>";
$x++; //4
echo "$x<br>";
$x++; //5
echo "$x<br>";
//loop
/* 

while(condition){
	//specify the code repeated
}
*/
echo "count 0 to 10 using loops<br>";
$x=0;
while ($x<= 10) {
	# code...
	echo "$x <br>";
	$x++;

}

//using a while print from 0 to 20 
//skip usingg 2
//0,2,4,6....

echo "0 to 20 <br>";
$y=0;
while ($y<=20) {
	# code...
	echo "$y<br>";
	$y+=2; // $y = $y+2;
	if ($y>=15) {
		# code...
		break;
	}

}

//write a php program that indicate a value is either even or odd btn o to 10

//-even number is any number
//modulus x%2 ==0 -even number
//0----even
//1----odd

$z = 0;
echo "Even and Odd Numbers between 0 and 10<br>";
while ($z<= 10) {
	# code...
	if ($z%2==0) {
		# code...
		//even
		echo "$z -- even<br>";
	}else{
		//odd
		echo "$z --  odd<br>";

	}
	
	$z++;
}


?>