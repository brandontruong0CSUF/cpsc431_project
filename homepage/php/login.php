<?php

// Inialize session
//session_start();

// Parse POST data from AngularJS call
$postData = file_get_contents("php://input");
$request = json_decode($postData);
$email = $request->inputEmail;
$pw = $requeset->inputPassword;

// Connect to database
include("includes/db_connect.php");

// Retrieve username and password from database according to user's input
$sql = "SELECT * FROM ACCOUNT WHERE EMAIL = '" . $email . "' AND PASSWORD = '" . $pw . "'";

$result = $db->query($sql);
$num_rows = $result->num_rows;

// Check username and password match
if ( $num_rows > 0) {
  
	// Successful login
  // Set email variable
  $_SESSION['email'] = $email;
  
  // Set account type
  $row = $result->fetch_assoc();
  $_SESSION['type'] = $row['TYPE'];
  
	$data = array(
		"success" => true,
		"type" => $_SESSION['type']
	);
	
	echo json_encode($data);
}
else {
	
	// Failed login
	$data = array(
		"success" => false,
		"error" => "Failed to log in, please try again!"
	);
	
  echo json_encode($data);
}

?>