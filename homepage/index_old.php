<?php
  include_once "includes/db_config.php";
  
  // Start session
  session_start();
  if ($_SESSION["user"]) {
    
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
    <title>Homework 4 - User Interface via PHP</title>
  </head>

  <body>

    <header>
      <div class="container">
        <div class="navbar navbar-default">
        </div>
      </div>
    </header>

    <main>
      <div id="container-fluid">
        <button id="testScore" type="button" class="btn btn-default">Avg Test Scores</button>
        <button id="classScore" type="button" class="btn btn-default">Avg Class Scores</button>
      </div>
      
      <div id="container-fluid">
        <table class="table table-hover">
          <thead>
            <tr>
              <th>CWID</th>
              <th>First Name</th>
              <th>Last Name</th>
            </tr>
          </thead>
          <tbody>
      <!-- Get CWID & Generate table -->
      <?php
        
        $conn = new mysqli(HOST, USER, PASSWORD, DATABASE);
        if ($conn->connect_error) {
            die("Could not connect to MySQL server\n" . $conn->connect_error);
        }
        $sql = "SELECT * FROM students";
        $results = $conn->query($sql);
        while($row = $results->fetch_assoc()) {
          echo "<tr cwid=\"".$row['id']."\" firstName=\"".$row['firstName']."\" lastName=\"".$row['lastName']."\">";
          echo "<td>".$row['id']."</td>";
          echo "<td>".$row['firstName']."</td>";
          echo "<td>".$row['lastName']."</td>";
          echo "</tr>";
        }
        
      ?>
          </tbody>
        </table>
      </div>

      <!-- Load these after page is finished downloading -->
      <script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
      <script src="js/jquery.js"></script>
    </main>
  </body>
</html>

