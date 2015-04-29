<?php

// Inialize session
session_start();

// Connect to database
include("includes/db_connect.php");

// Retrieve username and password from database according to user's input
$sql = "SELECT * FROM ACCOUNT WHERE EMAIL = '" . $_POST['inputEmail'] . "' AND PASSWORD = '" . $_POST['inputPassword'] . "'";

$result = $db->query($sql);
$num_rows = $result->num_rows;
// Check username and password match
if ( $num_rows > 0) {
  
  // Set email variable
  $_SESSION['email'] = $_POST['email'];
  
  // Set account type
  $row = $result->fetch_assoc();
  $_SESSION['type'] = $row['TYPE'];
  
  // Jump to page
  if ($_SESSION['type'] == 0) {
    header('Location: faculty.php');
  }
  elseif ($_SESSION['type'] == 1) {
    header('Location: student.php');
  }
  elseif ($_SESSION['type'] == 2) {
    header('Location: admin.php');
  }
  else {
    header('Location: index.php');
  }
}
else {
  // Jump to login page
  header('Location: index.php');
}

?>