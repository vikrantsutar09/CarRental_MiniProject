<?php
// Database connection
$conn = new mysqli("localhost", "root", "", "speedoo");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$c_id          = $_POST['c_id'];
$car_name      = $_POST['car_name'];
$car_model     = $_POST['car_model'];
$fule_type     = $_POST['fule_type'];
$transmission  = $_POST['transmission'];
$rent_per_day  = $_POST['rent_per_day'];
$description   = $_POST['description'];
$car_status    = isset($_POST['car_status']) ? 1 : 0;

$image_path = "";
if (isset($_FILES['car_image']) && $_FILES['car_image']['error'] == 0) {
    $image_name = time() . '_' . basename($_FILES['car_image']['name']);
    $target_dir = "uploads/";
    $target_file = $target_dir . $image_name;

    if (!is_dir($target_dir)) {
        mkdir($target_dir, 0777, true);
    }

    if (move_uploaded_file($_FILES['car_image']['tmp_name'], $target_file)) {
        $image_path = $target_file;

        $sql = "UPDATE cars SET 
                car_name = ?, 
                car_model = ?, 
                fule_type = ?, 
                transmission = ?, 
                rent_per_day = ?, 
                car_image = ?, 
                description = ?, 
                car_status = ? 
                WHERE c_id = ?";

        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssssissii", $car_name, $car_model, $fule_type, $transmission, $rent_per_day, $image_path, $description, $car_status, $c_id);
    } else {
        echo "Failed to upload image.";
        exit;
    }

} else {
    $sql = "UPDATE cars SET 
            car_name = ?, 
            car_model = ?, 
            fule_type = ?, 
            transmission = ?, 
            rent_per_day = ?, 
            description = ?, 
            car_status = ? 
            WHERE c_id = ?";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssisii", $car_name, $car_model, $fule_type, $transmission, $rent_per_day, $description, $car_status, $c_id);
}

if ($stmt->execute()) {
    header("Location: cars.php?msg=Car+updated+successfully");
    exit();
} else {
    echo "Error updating car: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
