<?php
$conn = new mysqli("localhost", "root", "", "speedoo");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_GET['id'])) {
    $user_id = $_GET['id'];

    $sql = "DELETE FROM user WHERE u_id = $user_id";

    if ($conn->query($sql) === TRUE) {
        header("Location: users.php?msg=User+Deleted+Successfully");
        exit();
    } else {
        echo "Error deleting user: " . $conn->error;
    }
} else {
    echo "Invalid Request.";
}

$conn->close();
?>
