<?php
// Start a session to keep the user logged in
session_start();

// Check if the login form was submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve and sanitize user inputs (replace with your validation/sanitization logic)
    $entered_username = $_POST['username'];
    $entered_password = $_POST['password'];

    // Connect to the database (replace with your database credentials)
    $db = new mysqli("localhost", "db_username", "db_password", "db_name");

    // Check for a successful database connection
    if ($db->connect_error) {
        die("Connection failed: " . $db->connect_error);
    }

    // Prepare an SQL query to retrieve user data by username (use prepared statements)
    $stmt = $db->prepare("SELECT user_id, username, password FROM users WHERE username = ?");
    $stmt->bind_param("s", $entered_username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $row = $result->fetch_assoc();
        $hashed_password = $row['password'];

        // Verify the entered password against the hashed password
        if (password_verify($entered_password, $hashed_password)) {
            // Password is correct, create a session
            $_SESSION['user_id'] = $row['user_id'];
            
            // Redirect to the dashboard or another page on success
            header("Location: dashboard.php");
            exit;
        }
    }

    // Invalid username or password
    $_SESSION['error'] = "Invalid username or password.";
    $stmt->close();
    $db->close();

    // Redirect back to the login page or display an error message
    header("Location: login.php");
    exit;
}