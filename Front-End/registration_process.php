<?php
//User Registration in PHP Backend

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
$sql = "INSERT INTO user (email, password_hash)    
        VALUES (?, ?)";                                                 

// Create a new prepared statement??? - UNSURE WHAT THIS MEANS.
$stmt = $mysqli->stmt_init();

//Prepare the statement for execution.
if (!$stmt->prepare($sql)) {
    die("SQL error: " . $mysqli->error);
}

//Bind values to the placeholder characters.
$stmt->bind_param("ss", $_POST["email"], $password_hash);

//Auto-sends welcome email to new user and then redirects them to home page.
if ($stmt->execute()) {

    $recipient = $_POST["email"];
    $subject = "Welcome to Palette Paradise!"; 
    $emailBody = "Welcome to Pallete Paradise!";

    mail($recipient, $subject, $emailBody);

    header("Location: index.php"); 
} else {
    if($mysqli->errno === 1062) {
        die("This email is already associated with an account.");     
    } else {
    die($mysqli->error . " " . $mysqli->errorno);
    }
}


