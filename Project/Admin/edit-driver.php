  <?php
// Database connection
  $conn = new mysqli("localhost", "root", "", "speedoo");
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  $d_id = isset($_GET['id']) ? (int)$_GET['id'] : 0;

  $sql = "SELECT * FROM driver WHERE d_id = $d_id";
  $result = $conn->query($sql);

  if ($result->num_rows == 0) {
    echo "Driver not found!";
    exit;
  }

  $driver = $result->fetch_assoc();
  // $img_path=$car['car_image'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Edit Driver</title>
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
    }
    .form-label { font-weight: 500; }
    .form-control:focus, .form-select:focus {
      border-color: #0d6efd;
      box-shadow: 0 0 0 0.2rem rgba(13, 110, 253, 0.25);
    }
    .btn-primary:hover {
      transform: translateY(-2px);
      box-shadow: 0 4px 15px rgba(13, 110, 253, 0.3);
    }
    h2 {
      text-align: center;
      margin-bottom: 30px;
      color: #0d6efd;
      font-weight: bold;
    }
  </style>
</head>
<body>

<div class="container mt-5">
  <div class="form-container">
    <h2><i class="bi bi-person-lines-fill"></i> Edit Driver</h2>

    <form action="edit-driver-code.php" method="POST" enctype="multipart/form-data">
      <input type="hidden" name="d_id" value="<?= $driver['d_id'] ?>">

      <div class="row g-3">
         <div class="col-md-6">
          <label class="form-label">Username</label>
          <input type="text" class="form-control" name="d_username" value="<?= $driver['d_username'] ?>" required>
        </div>

        <div class="col-md-6">
          <label class="form-label">Email</label>
          <input type="email" class="form-control" name="d_email" value="<?= $driver['d_email'] ?>">
        </div>

        <div class="col-md-6">
          <label class="form-label">Password</label>
          <input type="password" class="form-control" name="d_password" value="<?= $driver['d_password'] ?>" required>
        </div>

        <div class="col-md-6">
          <label class="form-label">Phone Number</label>
          <input type="tel" class="form-control" name="d_phone" value="<?= $driver['d_phone'] ?>" required>
        </div>

        <div class="col-md-6">
          <label class="form-label">License Number</label>
          <input type="text" class="form-control" name="d_license" value="<?= $driver['d_license'] ?>" required>
        </div>

        <div class="col-md-6">
          <label class="form-label">Current Profile Image</label><br>
          <img src="<?= $driver['d_profile_image'] ?>" alt="Profile Image" class="img-fluid rounded mb-2" style="max-width: 100px;">
        </div>

        <div class="col-md-6">
          <label class="form-label">Change Profile Image</label>
          <input type="file" class="form-control" name="d_profile_image">
        </div>

        <div class="col-12 mt-4 text-end">
          <button type="submit" class="btn btn-primary"><i class="bi bi-check-circle"></i> Update Driver</button>
          <a href="drivers.php" class="btn btn-secondary">Cancel</a>
        </div>
      </div>
    </form>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
