<?php
$conn = new mysqli("localhost", "root", "", "speedoo");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_GET['id'])) {
    $car_id = $_GET['id'];

    $sql = "DELETE FROM cars WHERE c_id = $car_id";

    if ($conn->query($sql) === TRUE) {
        header("Location: cars.php?msg=Car+Deleted+Successfully");
        exit();
    } else {
        echo "Error deleting car: " . $conn->error;
    }
} else {
    echo "Invalid Request.";
}

$conn->close();
?>
