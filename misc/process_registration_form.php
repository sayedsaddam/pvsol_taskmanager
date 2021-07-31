<?php
// Fetching Values From URL
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$contact = $_POST['contact'];
$connection = mysqli_connect("localhost", "root", ""); // Establishing Connection with Server..
$db = mysqli_select_db($connection, "haco"); // Change the database name with your database name.
if (isset($_POST['name'])) {
	$query = mysqli_query($connection, "insert into user_registration(name, email, password, phone) values ('$name', '$email', '$password','$contact')"); //Insert Query
	echo "Form Submitted succesfully";
}
mysqli_close($connection); // Connection Closed
?>