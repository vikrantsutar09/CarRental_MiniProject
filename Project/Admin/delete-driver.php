<?php
$conn = new mysqli("localhost", "root", "", "speedoo");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_GET['id'])) {
    $driver_id = $_GET['id'];

    $sql = "DELETE FROM driver WHERE d_id = $driver_id";

    if ($conn->query($sql) === TRUE) {
        header("Location: delete-driver.php?msg=Driver+Deleted+Successfully");
        exit();
    } else {
        echo "Error deleting car: " . $conn->error;
    }
} else {
    echo "Invalid Request.";
}

$conn->close();
?>
