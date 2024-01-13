<?php
require_once 

// Create an instance of the UserView class
$userView = new UserView();

// Example: Display information for a specific user (assuming user ID is 1)
$userId = 1;
$user = $userView->showUser($userId);

// Process or display user details as needed
if ($user) {
    echo "User ID: {$user['id']}<br>";
    echo "Username: {$user['username']}<br>";
    echo "Email: {$user['email']}<br>";
    // Add more user details as needed
} else {
    echo "User not found.";
}
?>
