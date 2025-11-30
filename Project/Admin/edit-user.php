<?php
// Database connection
$conn = new mysqli("localhost", "root", "", "speedoo");
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$u_id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
$sql = "SELECT * FROM user WHERE u_id = $u_id";
$result = $conn->query($sql);

if ($result->num_rows == 0) {
  echo "User not found!";
  exit;
}

$user = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Edit User</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css" rel="stylesheet">
  <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <link rel="icon" type="image/png" href="./images/faviconlogo.png">
  <style>
    body {
      background-color: #f4f6f9;
      font-family: 'Segoe UI', sans-serif;
    }

    .form-container {
      max-width: 900px;
      margin: auto;
      background: white;
      padding: 40px;
      border-radius: 20px;
      box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
      animation: fadeInUp 0.6s ease;
    }

    @keyframes fadeInUp {
      from {
        opacity: 0;
        transform: translateY(30px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    .form-label {
      font-weight: 500;
    }

    .form-control:focus, .form-select:focus {
      border-color: #198754;
      box-shadow: 0 0 0 0.2rem rgba(25, 135, 84, 0.25);
    }

    .btn-success {
      transition: all 0.3s ease;
    }

    .btn-success:hover {
      transform: translateY(-2px);
      box-shadow: 0 4px 15px rgba(25, 135, 84, 0.3);
    }

    h2 {
      text-align: center;
      margin-bottom: 30px;
      color: #198754;
      font-weight: bold;
    }
  </style>
</head>
<body>

<div class="container mt-5">
  <div class="form-container">
    <h2><i class="bi bi-person-bounding-box"></i> Edit User</h2>

    <form action="edit-user-code.php" method="POST" enctype="multipart/form-data">
      <input type="hidden" name="u_id" value="<?= $user['u_id'] ?>">

      <div class="row g-3">
        <div class="col-md-6">
          <label class="form-label">Full Name</label>
          <input type="text" class="form-control" name="u_name" value="<?= $user['u_name'] ?>" required>
        </div>

        <div class="col-md-6">
          <label class="form-label">Email</label>
          <input type="email" class="form-control" name="u_email" value="<?= $user['u_email'] ?>" required>
        </div>

        <div class="col-md-6">
          <label class="form-label">Username</label>
          <input type="text" class="form-control" name="username" value="<?= $user['username'] ?>" required>
        </div>

        <div class="col-md-6">
          <label class="form-label">Password</label>
          <input type="password" class="form-control" name="u_password" placeholder="Leave blank to keep current">
        </div>

        <div class="col-md-6">
          <label class="form-label">Phone</label>
          <input type="text" class="form-control" name="u_phone" value="<?= $user['u_phone'] ?>">
        </div>

        <div class="col-md-6">
          <label class="form-label">Role</label>
          <select class="form-select" name="u_role" required>
            <option <?= $user['u_role'] == 'admin' ? 'selected' : '' ?> value="admin">Admin</option>
            <option <?= $user['u_role'] == 'user' ? 'selected' : '' ?> value="user">User</option>
          </select>
        </div>

        <div class="col-md-6">
          <label class="form-label">Current Image</label><br>
          <img src="<?= $user['u_image'] ?>" alt="User Image" class="img-fluid rounded mb-2" style="max-width: 100px;">
        </div>

        <div class="col-md-6">
          <label class="form-label">Change Image</label>
          <input type="file" class="form-control" name="u_image">
        </div>

        <div class="col-md-6 mt-3">
          <div class="form-check form-switch">
            <input class="form-check-input" type="checkbox" id="statusSwitch" name="status" <?= $user['u_role'] == 'active' ? 'checked' : '' ?>>
          </div>
        </div>

        <div class="col-12 mt-4 text-end">
          <button type="submit" class="btn btn-success"><i class="bi bi-check-circle"></i> Update User</button>
          <a href="users.php" class="btn btn-secondary">Cancel</a>
        </div>
      </div>
    </form>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
