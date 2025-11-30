<?php
// Database connection
$conn = new mysqli("localhost", "root", "", "speedoo");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $d_name     = $_POST['d_name'];
    $d_email    = $_POST['d_email'];
    $d_username = $_POST['d_username'];
    $d_password = $_POST['d_password']; 
    $d_phone    = $_POST['d_phone'];
    $d_license  = $_POST['d_license'];
    $d_status   = isset($_POST['d_status']) ? 1 : 0;

    $target_dir = "../images/Admin/driver/";
    $image_name = time() . "_" . basename($_FILES["d_profile_image"]["name"]);
    $target_file = $target_dir . $image_name;

    if (!file_exists($target_dir)) {
        mkdir($target_dir, 0777, true);
    }

    if (move_uploaded_file($_FILES["d_profile_image"]["tmp_name"], $target_file)) {
        // Insert query
        $sql = "INSERT INTO driver (d_name, d_email, d_username, d_password, d_phone, d_license, d_profile_image, d_status)
                VALUES ('$d_name', '$d_email', '$d_username', '$d_password', '$d_phone', '$d_license', '$target_file', '$d_status')";

        if ($conn->query($sql) === TRUE) {
            echo "<script>alert('Driver added successfully!'); window.location.href='drivers.php';</script>";
        } else {
            echo "Error: " . $conn->error;
        }
    } else {
        echo "Failed to upload profile image.";
    }
}

$conn->close();
?>
