<?php
//Starts a session
session_start();

// Check if the login form was submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $entered_username = $_POST['email'];
    $entered_password = $_POST['password'];

    // Connect to database
    $mysqli = require __DIR__ . "/database_handler.php";

    // Check for a successful database connection
    if ($mysqli->connect_error) {
        die("Connection failed: " . $mysqli->connect_error);
    }

    // Prepare an SQL query to retrieve user data by username (use prepared statements)
    $stmt = $mysqli->prepare("SELECT user_id, email, password_hash FROM user WHERE email = ?");
    $stmt->bind_param("s", $entered_username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $row = $result->fetch_assoc();
        $hashed_password = $row['password_hash'];

        // Verify the entered password against the hashed password
        if (password_verify($entered_password, $hashed_password)) {
            // Password is correct, create a session
            $_SESSION['user_id'] = $row['user_id'];
            
            // Redirect to the dashboard or another page on success
            header("Location: index.php");
            exit;
        }
    }

    // Invalid username or password
    $_SESSION['error'] = "Invalid username or password.";
    $stmt->close();
    $mysqli->close();

    // Redirect back to the login page or display an error message
    header("Location: login.php");
    exit;
}