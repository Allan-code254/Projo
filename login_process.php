<?php
// A simple array to store user credentials
$users = [
    "user1@example.com" => password_hash("password123", PASSWORD_DEFAULT),
    "user2@example.com" => password_hash("mypassword", PASSWORD_DEFAULT),
];

// Login function to authenticate users
function authenticateUser($email, $password, $users) {
    if (isset($users[$email]) && password_verify($password, $users[$email])) {
        return true; // Login successful
    }
    return false; // Login failed
}

// Example usage
$email = $_POST['email'] ?? null; // Email from login form
$password = $_POST['password'] ?? null; // Password from login form

if ($email && $password) {
    if (authenticateUser($email, $password, $users)) {
        echo "Login successful! Welcome, " . htmlspecialchars($email);
    } else {
        echo "Invalid email or password.";
    }
}
?>
