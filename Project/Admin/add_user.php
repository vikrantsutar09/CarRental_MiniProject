<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Add User</title>
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
      max-width: 800px;
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

    h2 {
      text-align: center;
      margin-bottom: 30px;
      color: #0d6efd;
      font-weight: bold;
    }

    .form-label {
      font-weight: 500;
    }

    .form-control:focus, .form-select:focus {
      border-color: #0d6efd;
      box-shadow: 0 0 0 0.2rem rgba(13, 110, 253, 0.25);
    }

    .btn-primary {
      transition: all 0.3s ease;
    }

    .btn-primary:hover {
      transform: translateY(-2px);
      box-shadow: 0 4px 15px rgba(13, 110, 253, 0.3);
    }
  </style>
</head>
<body>

<div class="container mt-5">
  <div class="form-container">
    <h2><i class="bi bi-person-plus-fill"></i> Add New User</h2>

    <form action="insert-user.php" method="POST" enctype="multipart/form-data">
      <div class="row g-3">
        <div class="col-md-6">
          <label class="form-label">Full Name</label>
          <input type="text" class="form-control" name="u_name" required>
        </div>

        <div class="col-md-6">
          <label class="form-label">Email</label>
          <input type="email" class="form-control" name="u_email" required>
        </div>

        <div class="col-md-6">
          <label class="form-label">Username</label>
          <input type="text" class="form-control" name="username" required>
        </div>

        <div class="col-md-6">
          <label class="form-label">Password</label>
          <input type="password" class="form-control" name="u_password" required>
        </div>

        <div class="col-md-6">
          <label class="form-label">Phone</label>
          <input type="text" class="form-control" name="u_phone" required>
        </div>

        <div class="col-md-6">
          <label class="form-label">Role</label>
          <select class="form-select" name="u_role" required>
            <option selected disabled>Select Role</option>
            <option value="Admin">Admin</option>
            <option value="Manager">Manager</option>
            <option value="User">User</option>
          </select>
        </div>

        <div class="col-md-12">
          <label class="form-label">Profile Image</label>
          <input type="file" class="form-control" name="u_image">
        </div>

        <div class="col-md-6 mt-3">
          <div class="form-check form-switch">
            <input class="form-check-input" type="checkbox" id="statusSwitch" name="status" checked>
            <label class="form-check-label" for="statusSwitch">Active</label>
          </div>
        </div>

        <div class="col-12 mt-4 text-end">
          <button type="submit" class="btn btn-primary"><i class="bi bi-check-circle"></i> Add User</button>
          <a href="users.php" class="btn btn-secondary">Cancel</a>
        </div>
      </div>
    </form>
  </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
