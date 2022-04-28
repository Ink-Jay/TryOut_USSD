<?php
//Reads the variables sent via POST
$sessionId = $_POST["session"];
$serviceCode = $_POST["serviceCode"];
$phoneNumber = $_POST["phoneNumber"];
$text = $_POST["text"];


if ($text == ""){
    //This is the first request after dialing
    $response = "CON What would you like to check \n";
    $response .= "1. My Account No \n";
    $response .= "2. My Phone Number";
}
else if ($text == "1"){
    //Business logic for the first level response
    $response = "CON Choose the account information you would like to view \n";
    $response .= "1. Account Number \n";
    $response .= "2. Acoount Balance \n";
}
else if ($text == "2"){
    //Business logic for the first level response
    //This is a terminal request
    $response = "END Your phone number is".$phoneNumber;
}
else if ($text == "1*1"){
    //Business logic for the second level response after selecting 1 in first level
    $accountNumber = "ACC001";

    //This is a terminal request 
    $response = "END Your Account Number is ".$accountNumber;
}
else if ($text == "1*2"){
    //Business logic for the second level after selecting 1 in first level
    $balance = "KES 10,000";

    //This is a terminal request
   $response = "END Your account balance is ".$balance;
}

//Echo the response to the API
header('Content-type: text/plain');
echo $response;














?>
