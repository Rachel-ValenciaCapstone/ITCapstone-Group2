<?php 
//Database Handler

//Login for database (db).
$host = "localhost";
$dbName = "id21306473_databaseoct22";
$dbUsername = "id21306473_username";
$dbPassword = "Secret123!";

//Creates the object ($mysqli) that will be used to connect to the database.
$mysqli = new mysqli($host, $dbUsername, $dbPassword, $dbName);

//Shows us a connection error if unable to connect to the database.
if ($mysqli->connect_errno) {
    die("Connection Error: " . $mysqli->connect_error);
}

return $mysqli;