<?php
// Start a session to keep user logged in
session_start();

// Check if the registration form was submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve and sanitize user inputs (replace with your validation/sanitization logic)
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password_confirm = $_POST['password_confirm'];

    // Check if the entered passwords match
    if ($password !== $password_confirm) {
        $_SESSION['error'] = "Passwords do not match. Please try again.";
        header("Location: register.php");
        exit;
    }

      // Password complexity requirements using regular expressions
    $password_pattern = "/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[\W_]).{8,}$/";

    if (!preg_match($password_pattern, $password)) {
        $_SESSION['error'] = "Password must contain at least one uppercase letter, one lowercase letter, one number, one symbol, and be at least 8 characters long.";
        header("Location: register.php");
        exit;
    }

    // Hash the user's password for secure storage
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Connect to the database (replace with your database credentials)
    $db = new mysqli("localhost", "db_username", "db_password", "db_name");

    // Check for a successful database connection
    if ($db->connect_error) {
        die("Connection failed: " . $db->connect_error);
    }

    // Prepare an SQL query to insert user data into the database (use prepared statements)
    $stmt = $db->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $username, $email, $hashed_password);

    // Execute the query
    if ($stmt->execute()) {
        // Registration successful
        $_SESSION['message'] = "Registration successful. You can now log in.";
        $stmt->close();
        $db->close();

        // Redirect to the login page or a success page
        header("Location: login.php");
        exit;
    } else {
        // Registration failed
        $_SESSION['error'] = "Registration failed. Please try again later.";
        $stmt->close();
        $db->close();

        // Redirect back to the registration page or display an error message
        header("Location: register.php");
        exit;
    }
}


password requirements 
password confirmation 
error checking for email already registered 


