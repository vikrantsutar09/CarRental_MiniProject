  <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Manage Driver</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css" rel="stylesheet">
  <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <link rel="icon" type="image/png" href="../images/faviconlogo.png">
  <link rel="stylesheet" type="text/css" href="admin_style.css">
  </head>
<body>

  <?php include('sidebar.php')?>

    <div class="container mt-5">
      <h2 class="mb-4"><i class="bi-person-circle"></i> Manage Driver</h2>

      <!-- Add Car Button -->
      <div class="mb-3 text-end">
        <a href="add_drivers.php">
          <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#carModal"><i class="bi bi-plus-circle"></i> Add Driver</button>
        </a>
      </div>

      <!-- Car List Table -->
      <table class="table table-bordered table-hover">
        <thead class="table-dark">
          <tr>
            <th>ID</th>
            <th>Image</th>
            <th>Username</th>
            <th>Email</th>
            <th>Phone</th>
            <th>License ID</th>
            <th>Status</th>
            <th>Actions</th>
          </tr>
        </thead>
        
        <tbody>
          <?php
// Database connection
          $conn = new mysqli("localhost", "root", "", "speedoo");

          if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
          }

          $sql = "SELECT * FROM driver";
          $result = $conn->query($sql);
          ?>


          <?php
          if ($result->num_rows > 0) {
            $sr_no = 1;
            while ($row = $result->fetch_assoc()) {
              echo "<tr>";
              echo "<td>" . $sr_no++ . "</td>";
              // echo "<td>" . $row['d_id'] . "</td>";
              echo "<td><img src='" . $row['d_profile_image'] . "' class='car-img img-thumbnail' width='50'></td>";
              echo "<td>" . $row['d_username'] . "</td>";
              echo "<td>" . $row['d_email'] . "</td>";
              echo "<td>" . $row['d_phone'] . "</td>";
              echo "<td>" . $row['d_license'] . "</td>";
              echo "<td>" . ($row['d_status'] ? "Active" : "Inactive") . "</td>";
              echo "<td>
              <a href='edit-driver.php?id=" . $row['d_id'] . "' class='btn btn-sm btn-warning'><i class='bi bi-pencil-square'></i></a>
              <a href='delete-driver.php?id=" . $row['d_id'] . "' class='btn btn-sm btn-danger' onclick=\"return confirm('Are you sure you want to delete this driver?');\"><i class='bi bi-trash'></i></a>
              </td>";

              echo "</tr>";
            }
          } else {
            echo "<tr><td colspan='9' class='text-center'>No cars found</td></tr>";
          }
          ?>
        </tbody>

      </table>
    </div>



<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
