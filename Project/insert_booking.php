<?php
// insert_booking.php

// Database connection
$conn = new mysqli("localhost", "root", "", "speedoo");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve POST data
$customer_name   = $_POST['customer_name'];
$car_name        = $_POST['car_name'];
$phone_no        = $_POST['phone_no'];
$pickup_date     = $_POST['pickup_date'];
$drop_date       = $_POST['return_date'];
$pickup_location = $_POST['pickup_location'];
$drop_location   = $_POST['drop_location'];
$rent_per_day    = $_POST['rent_per_day'];  // new field

// Insert query now includes rent_per_day
$sql = "INSERT INTO booking 
    (customer_name, car_name, phone_no, pickup_date, drop_date, pickup_location, drop_location, rent_per_day) 
    VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

$stmt = $conn->prepare($sql);
$stmt->bind_param(
    "sssssssd",
    $customer_name,
    $car_name,
    $phone_no,
    $pickup_date,
    $drop_date,
    $pickup_location,
    $drop_location,
    $rent_per_day
);

if ($stmt->execute()) {
    header("Location: confirm_booking.php");
    exit();
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
