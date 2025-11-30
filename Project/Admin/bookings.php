<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Manage Bookings</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css" rel="stylesheet">
  <!-- Favicon -->
  <link rel="icon" type="image/x-icon" href="favicon.ico">
  <link rel="icon" type="image/png" href="../images/faviconlogo.png">
  <style>
    body { background-color: #f8f9fa; }
    .table th, .table td { vertical-align: middle; }
    .action-btns button { margin-right: 5px; }
  </style>
</head>
<body>

<?php include('sidebar.php') ?>

<div class="container mt-5">
  <h2 class="mb-4"><i class="bi bi-calendar-check"></i> Manage Bookings</h2>

  <div class="table-responsive">
    <table class="table table-bordered table-hover shadow-sm">
      <thead class="table-dark text-center">
        <tr>
          <th>ID</th>
          <th>Customer Name</th>
          <th>Car Name</th>
          <th>Phone</th>
          <th>Pickup Date</th>
          <th>Return Date</th>
          <th>Pickup Location</th>
          <th>Drop Location</th>
          <th>Rent/Day ($)</th>  <!-- New column -->
          <th>Actions</th>
        </tr>
      </thead>
      <tbody class="text-center">
        <?php
          // Database connection
          $conn = new mysqli("localhost", "root", "", "speedoo");
          if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
          }

          // Now booking table has rent_per_day
          $sql = "SELECT * FROM booking";
          $result = $conn->query($sql);

          if ($result->num_rows > 0) {
            $sr_no = 1;
            while ($row = $result->fetch_assoc()) {
              echo "<tr>";
              echo "<td>" . $sr_no++ . "</td>";
              echo "<td>" . htmlspecialchars($row['customer_name']) . "</td>";
              echo "<td>" . htmlspecialchars($row['car_name']) . "</td>";
              echo "<td>" . htmlspecialchars($row['phone_no']) . "</td>";
              echo "<td>" . htmlspecialchars($row['pickup_date']) . "</td>";
              echo "<td>" . htmlspecialchars($row['drop_date']) . "</td>";
              echo "<td>" . htmlspecialchars($row['pickup_location']) . "</td>";
              echo "<td>" . htmlspecialchars($row['drop_location']) . "</td>";
              echo "<td>" . htmlspecialchars($row['rent_per_day']) . "</td>"; // Display rent/day
              echo "<td class='action-btns'>
                      <a href='delete-booking.php?id=" . $row['b_id'] . "' 
                         class='btn btn-sm btn-danger' 
                         onclick=\"return confirm('Are you sure you want to delete this booking?');\">
                        <i class='bi bi-trash'></i>
                      </a>
                    </td>";
              echo "</tr>";
            }
          } else {
            // colspan is now 10 columns
            echo "<tr><td colspan='10' class='text-center'>No bookings found</td></tr>";
          }

          $conn->close();
        ?>
      </tbody>
    </table>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
