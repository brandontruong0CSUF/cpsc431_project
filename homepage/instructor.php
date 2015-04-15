<?php
  include_once "includes/db_config.php";
  
  // Start session
  session_start();
  if ($_SESSION["accountType"] == 1) {
    header("Location: http://www.yoursite.com/new_page.html");
  }
?>

<!DOCTYPE html>

<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles/custom.css"></script>
    <title>Registration - Course Management System</title>
  </head>

  <body>



    <!-- Load these after page is finished downloading -->
    <script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <script src="js/jquery.js"></script>
  </body>
</html>

