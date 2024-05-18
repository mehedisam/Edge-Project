<?php
// Database connection code
$conn = mysqli_connect("localhost", "root", "", "dcap");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Get username and password from the login form
$username = $_POST['username'];
$password = $_POST['password'];

// Query to check if the username and password match a record in the database
$sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) == 1) {
    // Login successful, redirect to a welcome page or dashboard
    header("Location: a_welcome.html");
    exit();
} else {
    // Login failed, display an error message
    echo "Invalid username or password. Please try again.";
}

mysqli_close($conn);
?>
