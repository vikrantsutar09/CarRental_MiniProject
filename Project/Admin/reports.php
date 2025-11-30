<?php
include('connection.php');

// Sanitize GET inputs
$pickup_date     = $conn->real_escape_string($_GET['pickup_date'] ?? '');
$drop_date       = $conn->real_escape_string($_GET['drop_date'] ?? '');
$pickup_location = $conn->real_escape_string($_GET['pickup_location'] ?? '');
$drop_location   = $conn->real_escape_string($_GET['drop_location'] ?? '');
$car_name        = $conn->real_escape_string($_GET['car_name'] ?? '');

// Fetch car list
$car_result = $conn->query("SELECT car_name FROM cars");

// Build query with filters
$sql = "SELECT * FROM booking WHERE 1=1";
if (!empty($pickup_date))     $sql .= " AND pickup_date = '$pickup_date'";
if (!empty($drop_date))       $sql .= " AND drop_date = '$drop_date'";
if (!empty($pickup_location)) $sql .= " AND pickup_location = '$pickup_location'";
if (!empty($drop_location))   $sql .= " AND drop_location = '$drop_location'";
if (!empty($car_name))        $sql .= " AND car_name = '$car_name'";

$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Booking Reports</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <!-- Favicon -->
  <link rel="icon" type="image/x-icon" href="favicon.ico">
  <link rel="icon" type="image/png" href="../images/faviconlogo.png">
  <style>
    .filter-form {
      animation: fadeInUp 0.5s ease;
    }

    @keyframes fadeInUp {
      from {
        opacity: 0;
        transform: translateY(20px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    label {
      font-weight: 600;
      color: #555;
    }

    input:focus, select:focus {
      border-color: #0d6efd;
      box-shadow: 0 0 0 0.2rem rgba(13, 110, 253, 0.25);
    }

    .btn-primary:hover {
      transform: scale(1.05);
      transition: 0.3s ease;
    }
  </style>
</head>
<body>

  <?php include('sidebar.php') ?>

  <div class="container">
    <h2 class="mt-5 mb-5"><i class="bi bi-clipboard-data"></i> Manage Report</h2>

    <form method="GET" class="filter-form mb-4">
      <div class="row g-3">
        <div class="col">
          <label>Pickup Date</label>
          <input type="date" name="pickup_date" class="form-control" value="<?= htmlspecialchars($pickup_date) ?>">
        </div>
        <div class="col">
          <label>Drop Date</label>
          <input type="date" name="drop_date" class="form-control" value="<?= htmlspecialchars($drop_date) ?>">
        </div>
        <div class="col">
          <label>Pickup Location</label>
          <input type="text" name="pickup_location" class="form-control" value="<?= htmlspecialchars($pickup_location) ?>" placeholder="City">
        </div>
        <div class="col">
          <label>Drop Location</label>
          <input type="text" name="drop_location" class="form-control" value="<?= htmlspecialchars($drop_location) ?>" placeholder="City">
        </div>
        <div class="col">
          <label>Select Car</label>
          <select name="car_name" class="form-select">
            <option value="">Select Car</option>
            <?php
            if ($car_result->num_rows > 0) {
              $car_result->data_seek(0);
              while ($row = $car_result->fetch_assoc()) {
                $selected = ($car_name == $row['car_name']) ? 'selected' : '';
                echo "<option value='".htmlspecialchars($row['car_name'])."' $selected>".htmlspecialchars($row['car_name'])."</option>";
              }
            }
            ?>
          </select>
        </div>
        <div class="col-md-12 text-end">
          <button type="submit" class="btn btn-primary">Filter</button>
          <a href="reports.php" class="btn btn-secondary">Reset</a>
        </div>

      </div>
    </form>

    <?php if ($result && $result->num_rows > 0): ?>
      <div class="table-responsive">
        <table class="table table-bordered text-center table-hover">
          <thead class="table-dark">
            <tr>
              <th>Sr.No</th>
              <th>Car Name</th>
              <th>Pickup Date</th>
              <th>Drop Date</th>
              <th>Pickup Location</th>
              <th>Drop Location</th>
              <th>Customer Name</th>
            </tr>
          </thead>
          <tbody>
            <?php $sr = 1; while ($row = $result->fetch_assoc()): ?>
            <tr>
              <td><?= $sr++ ?></td>
              <td><?= htmlspecialchars($row['car_name']) ?></td>
              <td><?= htmlspecialchars($row['pickup_date']) ?></td>
              <td><?= htmlspecialchars($row['drop_date']) ?></td>
              <td><?= htmlspecialchars($row['pickup_location']) ?></td>
              <td><?= htmlspecialchars($row['drop_location']) ?></td>
              <td><?= htmlspecialchars($row['customer_name']) ?></td>
            </tr>
          <?php endwhile; ?>
        </tbody>
      </table>
    </div>
  <?php else: ?>
    <p class="text-danger text-center">No bookings found.</p>
  <?php endif; ?>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<?php $conn->close(); ?>
