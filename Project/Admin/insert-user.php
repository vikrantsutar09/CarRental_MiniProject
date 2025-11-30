<?php
// Connect to database
$conn = new mysqli("localhost", "root", "", "speedoo");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $u_name = $_POST['u_name'];
    $u_email = $_POST['u_email'];
    $username = $_POST['username'];
    $u_password = $_POST['u_password']; 
    $u_phone = $_POST['u_phone'];
    $u_role = $_POST['u_role'];
    $status = isset($_POST['status']) ? 1 : 0;

    $target_dir = "../images/Admin/user/";
    $image_name = time() . "_" . basename($_FILES["u_image"]["name"]);
    $target_file = $target_dir . $image_name;

    if (!is_dir($target_dir)) {
        mkdir($target_dir, 0755, true);
    }

    if (!empty($_FILES["u_image"]["name"]) && move_uploaded_file($_FILES["u_image"]["tmp_name"], $target_file)) {
        $u_image = $target_file;
    } else {
        $u_image = ""; 
    }

    $sql = "INSERT INTO user (u_name, u_email, username, u_password, u_phone, u_role, u_image, status)
            VALUES ('$u_name', '$u_email', '$username', '$u_password', '$u_phone', '$u_role', '$u_image', '$status')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('User added successfully!'); window.location.href='users.php';</script>";
    } else {
        echo "Error: " . $conn->error;
    }

    $conn->close();
}
?>
