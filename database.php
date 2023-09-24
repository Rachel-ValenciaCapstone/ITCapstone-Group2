<?php
// Database Connection Code

$host = "localhost";
$dbname = "palette_paradise";
$username = "root";    // SHOULD ONLY LOG INTO ROOT WHEN DEVELOPING, NOT WHEN DONE???? MUST FIGURE OUT. 
$password = "";

$mysqli = new mysqli($host, $username, $password, $dbname);

// Tells me the name/number code of error if database connection error occurs. 
if ($mysqli->connect_errno) {
    die ("Connection error: " . $mysqli->connect_error);
}

// Return the mySQL variable
return $mysqli;

?>