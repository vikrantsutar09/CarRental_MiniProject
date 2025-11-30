<?php
// Database connection
$conn = new mysqli("localhost", "root", "", "speedoo");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $car_name = $_POST['car_name'];
    $car_model = $_POST['car_model'];
    $fule_type = $_POST['fuel_type'];
    $transmission = $_POST['transmission'];
    $rent_per_day = $_POST['rent_per_day'];
    $description = $_POST['description'];
    $car_status = isset($_POST['car_status']) ? 1 : 0;

    $target_dir = "../images/Admin/car/";
    $car_image = basename($_FILES["car_image"]["name"]);
    $target_file = $target_dir . $car_image;

    if (move_uploaded_file($_FILES["car_image"]["tmp_name"], $target_file)) {
        // Insert query
        $sql = "INSERT INTO cars (car_name, car_model, fule_type, transmission, rent_per_day, car_image, description, car_status)
        VALUES ('$car_name', '$car_model', '$fule_type', '$transmission', '$rent_per_day', '$target_file', '$description', '$car_status')";

        if ($conn->query($sql) === TRUE) {
            echo "<script>alert('Car added successfully!'); window.location.href='cars.php';</script>";
        } else {
            echo "Error: " . $conn->error;
        }
    } else {
        echo "Failed to upload image.";
    }
}
?>
