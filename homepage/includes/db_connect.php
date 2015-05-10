<?php

    define("HOST", "ecsmysql");     // The host you want to connect to.
    define("USER", "cs431s3");    // The database username.
    define("PASSWORD", "eesheico");    // The database password.
    define("DATABASE", "cs431s3");    // The database name.

    $db = new mysqli(HOST, USER, PASSWORD, DATABASE);
    if ($db->connect_error) {
        die("Could not connect to MySQL server\n" . $db->connect_error);
    }

?>