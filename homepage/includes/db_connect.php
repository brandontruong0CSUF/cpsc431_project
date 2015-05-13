<?php

    /*
    define("HOST", "ecsmysql");         // The host you want to connect to.
    define("USER", "cs431s3");          // The database username.
    define("PASSWORD", "eesheico");     // The database password.
    define("DATABASE", "cs431s3");      // The database name.

    $db = new mysqli(HOST, USER, PASSWORD, DATABASE);
    if ($db->connect_error) {
        die("Could not connect to MySQL server\n" . $db->connect_error);
    }
    */
    
    // This is the database connection information for cloud9 ide
    $servername = getenv('IP');
    $username = "brandontruong0cs";
    $password = "";
    $database = "c9";
    $dbport = 3306;

    // Create connection
    $db = new mysqli($servername, $username, $password, $database, $dbport);

    // Check connection
    if ($db->connect_error) {
        die("Connection failed: " . $db->connect_error);
    } 
    echo "Connected successfully (".$db->host_info.")";

?>