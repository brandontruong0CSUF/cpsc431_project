<?php

// Inialize session
session_start();

// Connect to database
include("../includes/db_connect.php");

// Parse POST data from AngularJS call
$postData = file_get_contents("php://input");
$request = json_decode($postData);
$email = $request->inputEmail;
$pw = $request->inputPassword;

// Retrieve username and password from database according to user's input
$sql = "SELECT * FROM CSUF_MEMBER WHERE EMAIL = '" . $email . "' AND PASSWORD = '" . $pw . "'";

$result = $db->query($sql);
$num_rows = $result->num_rows;

// Check username and password match
if ( $num_rows > 0) {
  
	// Successful login
  // Set email variable
  $_SESSION['email'] = $email;
  
  // Set account type
  $row = $result->fetch_assoc();
	if ($row['FACULTY_ID'] != NULL) {
		$_SESSION['type'] = 0;
		$_SESSION['id'] = $row['FACULTY_ID'];
	}
	elseif ($row['STUDENT_ID'] != NULL) {
		$_SESSION['type'] = 1;
		$_SESSION['id'] = $row['STUDENT_ID'];
	}
	elseif ($row['ADMIN_ID'] != NULL) {
		$_SESSION['type'] = 2;
		$_SESSION['id'] = $row['ADMIN_ID'];
	}
	else {
		die("Login Account ERROR!");	
	}
	
	$data = array(
		"success" => true,
		"type" => $_SESSION['type'],
		"id" => $_SESSION['id']
	);
	
	echo json_encode($data);
}
else {
	
	// Failed login
	$data = array(
		"success" => false,
		"error" => "Failed to log in, please try again!"
	);
	
  echo json_decode($data);
}

?>