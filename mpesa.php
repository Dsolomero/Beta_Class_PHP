<?php 

/*
-balance amount
-pin
-money to be sent
*/

$balance = 5000;

$pin = 6780;

$amountToSend = 2000;
$pinEntered = 6780;

//send to money
if ($amountToSend <= $balance) { //if 2000 less or equal to 5000?
	# code...
	echo "<h2 style='color: green'>Send Money Now</h2>";
}else{
	//false
	echo "<br><h style='color: red'2>Insufficient Balance to send $amountToSend. Your balance is $balance</h2>";

}

//check pin
//  pin correct    sending money 
// pin incorrect ---invalid pin, try again



if ($pinEntered == $pin) {
	# code...
	echo "<h2 style='color: green'>Sending Money......</h2>";
}else{
	//
	echo "<h2 style='color: red' >Invalid Pin!</h2>";
}






?>