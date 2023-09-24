<?php
/* Create a " <form action = "signup-process.php" method="post"> " that will be put 
into the HTML form under the heading for the sign up option. 
*/


// Enforces the requirement of a name on signup form
/*if (empty($_POST["username"])) {
    die("Name is required");
}
*/

// Enforces the requirement of an existing, valid email address on signup form.
if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
    die("Valid email is required.");
}

//Enforces an 8 character password.
if (strlen($_POST["password"]) <8) {
    die("Password must be at least 8 characters.");
}

//Ensures the password contains at least one letter. 
if (!preg_match("/[a-z]/i", $_POST["password"])) {
    die("Password must contain at least one letter.");
}

//Ensures the password contains at least one number.
if (!preg_match("/[0-9]/i", $_POST["password"])) {
    die("Password must contain at least one number."); // EVENTUALLY REQUIRE CAPITAL, LOWERCASE, and extra number.
}

//Confirms that password and confirm password fields match. 
if ($_POST["password"] !== $_POST["confirm_password"]) {
    die("Passwords must match.");
}

//Hashes the password so it's not saved in plain text.
$password_hash = password_hash($_POST["password"], PASSWORD_DEFAULT);

//Requires (or pulls? UNSURE) the database PHP script. - Connects to the database, but still UNSURE HOW. 
$mysqli = require __DIR__ . "/database.php";

// Avoids an SQL injection attack? and inserts the data into the database. 
$sql = "INSERT INTO user (email, password_hash)
        VALUES (?, ?)";

$stmt = $mysqli->stmt_init();

//if there is an error with the sql, this will stop it and give an error message
if (!$stmt->prepare($sql)) {
    die("SQL error: " . $mysqli->error);
}

$stmt->bind_param("sss",
                  $_POST["email"],
                  $password_hash);

//Checks if email has been used before. If not, successfully creates account. If not, displays error message. 
if ($stmt->execute()) {
    echo "Sign-up successful!";
} else {
    if ($mysqli->errno === 1062) {
        die("There is already an account under that email address.");
    } else {
    die($mysqli->error . " " . $mysqli->errno);  //MAYBE CHANGE THIS TO ECHO A SPECIFIC MESSAGE. TO DIFFERENTIATE MY CODE. 
    }
}


//Right now, this is just printing out the sample entries in the Youtube Video 
//to validate the data is being entered and processed correctly. 
//print_r($_POST);


// I may need to edit Erica's code about creating ID and name attributes to ensure the password
// and password confirmation boxes are different. 
?>