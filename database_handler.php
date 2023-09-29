<?php 
//Database Handler

//Login for database (db).
$host = "localhost";
$dbName = "id21254018_palette_paradise";
$dbUsername = "id21254018_palette";
$dbPassword = "Secret123!";

//Creates the object ($mysqli) that will be used to connect to the database.
$mysqli = new mysqli($host, $dbUsername, $dbPassword, $dbName);

//Shows us a connection error if unable to connect to the database.
if ($mysqli->connect_errno) {
    die("Connection Error: " . $mysqli->connect_error);
}

return $mysqli;