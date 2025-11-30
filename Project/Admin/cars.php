<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Manage Cars</title>
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
      <h2 class="mb-4"><i class="bi bi-car-front-fill"></i> Manage Cars</h2>

      <!-- Add Car Button -->
      <div class="mb-3 text-end">
        <a href="add_car.php">
          <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#carModal"><i class="bi bi-plus-circle"></i> Add Car</button>
        </a>
      </div>

      <!-- Car List Table -->
      <table class="table table-bordered table-hover">
        <thead class="table-dark">
          <tr>
            <th>ID</th>
            <th>Image</th>
            <th>Name</th>
            <th>Model</th>
            <th>Fuel</th>
            <th>Transmission</th>
            <th>Rent/Day</th>
            <th>Status</th>
            <th>Description</th>
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

          $sql = "SELECT * FROM cars";
          $result = $conn->query($sql);
          ?>


          <?php
          if ($result->num_rows > 0) {
            $sr_no = 1;
            while ($row = $result->fetch_assoc()) {
              echo "<tr>";
              echo "<td>" . $sr_no++ . "</td>";
              // echo "<td>" . $row['c_id'] . "</td>";
              echo "<td><img src='" . $row['car_image'] . "' class='car-img img-thumbnail' width='50'></td>";
              echo "<td>" . $row['car_name'] . "</td>";
              echo "<td>" . $row['car_model'] . "</td>";
              echo "<td>" . $row['fule_type'] . "</td>";
              echo "<td>" . $row['transmission'] . "</td>";
              echo "<td>$" . $row['rent_per_day'] . "</td>";
              echo "<td>" . ($row['car_status'] ? "Active" : "Inactive") . "</td>";
              echo "<td>" . $row['description'] . "</td>";
              echo "<td>
              <a href='edit-car.php?id=" . $row['c_id'] . "' class='btn btn-sm btn-warning'><i class='bi bi-pencil-square'></i></a>
              <a href='delete-car.php?id=" . $row['c_id'] . "' class='btn btn-sm btn-danger' onclick=\"return confirm('Are you sure you want to delete this car?');\"><i class='bi bi-trash'></i></a>
              </td>";

              echo "</tr>";
            }
          } else {
            echo "<tr><td colspan='9' class='text-center'>No cars found</td></tr>";
          }
          ?>
        </tbody>

       <!--  <tbody>
          <tr>
            <td>1</td>
            <td><img src="../images/cars/S Class Benz.png" width="50" class="img-thumbnail" /></td>
            <td>Hyundai i20</td>
            <td>2023</td>
            <td>Petrol</td>
            <td>Manual</td>
            <td>$40</td>
            <td>
              <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" role="switch" id="status1" checked>
              </div>
            </td>
            <td>
              <button class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#carModal"><i class="bi bi-pencil-square"></i></button>
              <button class="btn btn-sm btn-danger"><i class="bi bi-trash"></i></button>
            </td>
          </tr>
        </tbody> -->
      </table>
    </div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
