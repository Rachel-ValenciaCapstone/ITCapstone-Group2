<?php
//User Registration in PHP Backend PAge - VIDEO ONE

//Requires email be entered.
if (empty($_POST["email"])) {
    die("Valid email is required");
}

//Validates the email.
if(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
    die("Valid email is required");
}

//Requires an 8 letter password.
if (strlen($_POST["password"])<8) {
    die("Password must be at least 8 characters");
}

//Ensures password contains at least one letter.
if (!preg_match("/[a-z]/i", $_POST["password"])) {
    die("Password must contain at least one letter");
}

//Ensures the password contains at least one number.
if (!preg_match("/[0-9]/i", $_POST["password"])) {
    die("Password must contain at least one number");
}

//Validates that the both passwords match.
if ($_POST["password"] !== $_POST["confirm_password"]) {
    die("Passwords do not match");
}

//Hashes the password.
$password_hash = password_hash($_POST["password"], PASSWORD_DEFAULT);

// Connects to the database.
$mysqli = require __DIR__ . "/database_handler.php"; 

//Inserts the data entered into the database.
$sql = "INSERT INTO users2 (email, password_hash)
        VALUES (?, ?)";

// Create a new prepared statement??? - UNSURE WHAT THIS MEANS.
$stmt = $mysqli->stmt_init();

//Prepare the statement for execution.
if (!$stmt->prepare($sql)) {
    die("SQL error: " . $mysqli->error);
}

//Bind values to the placeholder characters.
$stmt->bind_param("ss", $_POST["email"], $password_hash);

$stmt->execute();

echo "Signup successful";