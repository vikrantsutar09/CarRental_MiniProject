<?php
$conn = new mysqli("localhost", "root", "", "speedoo");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_GET['id'])) {
    $booking_id = $_GET['id'];

    $sql = "DELETE FROM booking WHERE b_id = $booking_id";

    if ($conn->query($sql) === TRUE) {
        header("Location:bookings.php?msg=Booking+Deleted+Successfully");
        exit();
    } else {
        echo "Error deleting booking: " . $conn->error;
    }
} else {
    echo "Invalid Request.";
}

$conn->close();
?>
