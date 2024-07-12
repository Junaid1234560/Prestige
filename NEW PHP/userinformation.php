<?php

$server = "localhost";
$username = "root";
$password = "";
$database = "userinfodata1";

// Establish connection to the database
$con = mysqli_connect($server, $username, $password, $database);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

// Ensure the correct database is selected
mysqli_select_db($con, "userinfodata1");

// Get the form data (sanitize inputs to prevent SQL injection)
$user = mysqli_real_escape_string($con, $_POST['user']);
$email = mysqli_real_escape_string($con, $_POST['email']);
$message = mysqli_real_escape_string($con, $_POST['message']);

// Insert query
$query = "INSERT INTO `userinfodata1`(`user`, `email`, `message`) VALUES ('$user', '$email', '$message')";

// Execute the query
if (mysqli_query($con, $query)) {
    echo "Message sent successfully. Thank you!";
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($con);
}

// Close the connection
mysqli_close($con);

?>
