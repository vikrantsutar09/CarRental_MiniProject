<?php 
$conn = new mysqli("localhost", "root", "", "speedoo");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$u_id       = $_POST['u_id'];
$u_name     = $_POST['u_name'];
$u_email    = $_POST['u_email'];
$username   = $_POST['username'];
$u_password = $_POST['u_password'];
$u_phone    = $_POST['u_phone'];
$u_role     = $_POST['u_role'];
$status     = isset($_POST['status']) ? 'active' : 'inactive';
$u_image    = null;

$update_password = "";
if (!empty($u_password)) {
    // You can hash password here if needed, e.g., password_hash()
    $update_password = ", u_password = '$u_password'";
}

// Handle image upload
if (isset($_FILES['u_image']) && $_FILES['u_image']['error'] == 0) {
    $target_dir = "../images/Admin/user/";
    $u_image = time() . "_" . basename($_FILES["u_image"]["name"]);
    $target_file = $target_dir . $u_image;

    if (!move_uploaded_file($_FILES["u_image"]["tmp_name"], $target_file)) {
        die("Failed to upload image.");
    }

    $sql = "UPDATE user SET 
        u_name = '$u_name', 
        u_email = '$u_email', 
        username = '$username',
        u_phone = '$u_phone', 
        u_role = '$u_role', 
        status = '$status',
        u_image = '$target_file'
        $update_password
        WHERE u_id = '$u_id'";
} else {
    $sql = "UPDATE user SET 
        u_name = '$u_name', 
        u_email = '$u_email', 
        username = '$username',
        u_phone = '$u_phone', 
        u_role = '$u_role', 
        status = '$status'
        $update_password
        WHERE u_id = '$u_id'";
}

// echo $sql; // Uncomment for debugging

if ($conn->query($sql) === TRUE) {
    header("Location: users.php");
    exit;
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>
