<?php
// Database connection
$servername = "localhost";
$username = "root"; 
$password = "";     
$dbname = "speedoo";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$email = $_POST['l_email'];
$password = $_POST['l_password'];

// // Optional: Hash the password before storing
// $hashed_password = password_hash($password, PASSWORD_DEFAULT);

$sql = "INSERT INTO login (l_email, l_password) VALUES ('$email', '$password')";

if ($conn->query($sql) === TRUE) {
    header("Location: index.php");

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
