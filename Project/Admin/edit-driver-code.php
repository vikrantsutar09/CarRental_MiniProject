<?php
// Database connection
$conn = new mysqli("localhost", "root", "", "speedoo");
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$d_id       = $_POST['d_id'];
$d_name     = $_POST['d_name'];
$d_email    = $_POST['d_email'];
$d_username = $_POST['d_username'];
$d_password = $_POST['d_password'];
$d_phone    = $_POST['d_phone'];
$d_license  = $_POST['d_license'];

$get_img_sql = "SELECT d_profile_image FROM driver WHERE d_id = $d_id";
$img_result = $conn->query($get_img_sql);
$current_img = "";
if ($img_result->num_rows > 0) {
  $img_row = $img_result->fetch_assoc();
  $current_img = $img_row['d_profile_image'];
}

if (isset($_FILES['d_profile_image']) && $_FILES['d_profile_image']['error'] === UPLOAD_ERR_OK) {
  $img_name = $_FILES['d_profile_image']['name'];
  $img_tmp  = $_FILES['d_profile_image']['tmp_name'];
  $img_ext  = pathinfo($img_name, PATHINFO_EXTENSION);
  $new_img_name = 'uploads/driver_' . time() . '.' . $img_ext;
  move_uploaded_file($img_tmp, $new_img_name);
  $final_image_path = $new_img_name;

  // Optional: Delete old image if you want to
  // if (file_exists($current_img)) { unlink($current_img); }

} else {
  $final_image_path = $current_img;
}

$update_sql = "UPDATE driver SET 
  d_name = '$d_name',
  d_email = '$d_email',
  d_username = '$d_username',
  d_password = '$d_password',
  d_phone = '$d_phone',
  d_license = '$d_license',
  d_profile_image = '$final_image_path'
WHERE d_id = $d_id";

if ($conn->query($update_sql) === TRUE) {
  header("Location: drivers.php?msg=updated");
  exit();
} else {
  echo "Error updating driver: " . $conn->error;
}

$conn->close();
?>
