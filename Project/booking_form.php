<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Booking Form</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css" rel="stylesheet">
  <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <link rel="icon" type="image/png" href="./images/faviconlogo.png">
  <style>
    body {
      background-color: #f2f4f8;
      font-family: 'Segoe UI', sans-serif;
    }

    .booking-form {
      background: #fff;
      padding: 40px;
      border-radius: 20px;
      max-width: 800px;
      margin: 50px auto;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
      animation: fadeInUp 0.6s ease;
    }

    @keyframes fadeInUp {
      from {
        opacity: 0;
        transform: translateY(40px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    .form-label {
      font-weight: 500;
    }

    h2 {
      text-align: center;
      color: #0d6efd;
      margin-bottom: 30px;
    }

    .btn-primary {
      transition: 0.3s;
    }

    .btn-primary:hover {
      transform: scale(1.05);
    }
  </style>
</head>
<body>

<?php
// Connect to your database
$conn = new mysqli("localhost", "root", "", "speedoo");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch cars with rent per day
$car_query = "SELECT c_id, car_name, rent_per_day FROM cars";
$car_result = $conn->query($car_query);

// For pickup/drop default values (if any)
$pickup = isset($_POST['pickup']) ? $_POST['pickup'] : "";
$drop = isset($_POST['drop']) ? $_POST['drop'] : "";
?>

<div class="container">
  <div class="booking-form">
    <h2><i class="bi bi-calendar-check"></i> New Booking</h2>

    <form action="insert_booking.php" method="POST">
      <div class="row g-3">
        <!-- Car Selection -->
        <div class="col-md-4">
          <label class="form-label">Select Car</label>
          <select class="form-select" name="car_name" id="car_name" required>
            <option disabled selected>Select Car</option>
            <?php
            if ($car_result->num_rows > 0) {
              while ($row = $car_result->fetch_assoc()) {
                echo "<option value='" . $row['car_name'] . "' data-rent='" . $row['rent_per_day'] . "'>" . $row['car_name'] . "</option>";
              }
            } else {
              echo "<option disabled>No cars available</option>";
            }
            ?>
          </select>
        </div>

        <!-- Customer Name -->
        <div class="col-md-4">
          <label class="form-label">Customer Name</label>
          <input type="text" class="form-control" name="customer_name" required>
        </div>

        <!-- Phone Number -->
        <div class="col-md-4">
          <label class="form-label">Phone Number</label>
          <input type="tel" class="form-control" name="phone_no" required>
        </div>

        <!-- Pickup Date -->
        <div class="col-md-6">
          <label class="form-label">Pickup Date</label>
          <input type="date" class="form-control" name="pickup_date" required>
        </div>

        <!-- Drop Date -->
        <div class="col-md-6">
          <label class="form-label">Drop Date</label>
          <input type="date" class="form-control" name="return_date" required>
        </div>

        <!-- Pickup Location -->
        <div class="col-md-6">
          <label class="form-label">Pickup Location</label>
          <input type="text" class="form-control" name="pickup_location" value="<?php echo ($pickup); ?>" required>
        </div>

        <!-- Drop Location -->
        <div class="col-md-6">
          <label class="form-label">Drop Location</label>
          <input type="text" class="form-control" name="drop_location" value="<?php echo ($drop); ?>" required>
        </div>

        <!-- Rent Per Day -->
        <div class="col-md-4">
          <label class="form-label">Rent Per Day (₹)</label>
          <input type="text" class="form-control" name="rent_per_day" id="rent_per_day" readonly>
        </div>

        <!-- Buttons -->
        <div class="col-12 text-end mt-4">
          <button type="submit" class="btn btn-primary"><i class="bi bi-send-check"></i> Confirm Booking</button>
          <a href="bookings.php" class="btn btn-secondary">Cancel</a>
        </div>
      </div>
    </form>
  </div>
</div>

<script>
  // JavaScript to set the rent per day value based on the selected car
  document.getElementById('car_name').addEventListener('change', function () {
    const selectedOption = this.options[this.selectedIndex];
    const rent = selectedOption.getAttribute('data-rent');
    document.getElementById('rent_per_day').value = rent;
  });
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
