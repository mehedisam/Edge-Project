<?php
// Database connection code
$conn = mysqli_connect("localhost", "root", "", "dcap");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Process form data and insert into the "users" table

$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$full_name = $_POST['full_name'];
$birthdate = $_POST['birthdate'];
$gender = $_POST['gender'];
$phone = $_POST['phone'];

$sql = "INSERT INTO users (username, password, email, full_name, birthdate, gender, phone) VALUES ('$username', '$password', '$email', '$full_name', '$birthdate', '$gender', '$phone')";

if (mysqli_query($conn, $sql)) {
    echo "Registration successful!";
	 header("Location: a_login.html");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
