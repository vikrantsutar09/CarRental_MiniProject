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

<div class="container">
  <div class="booking-form">
    <h2><i class="bi bi-calendar-check"></i> New Booking</h2>

    <form action="save_booking.php" method="POST">
      <div class="row g-3">
        <div class="col-md-6">
          <label class="form-label">Select Car</label>
          <select class="form-select" name="car_id" required>
            <option disabled selected>Select Car</option>
            <option value="1">Hyundai i20</option>
            <option value="2">Toyota Fortuner</option>
            <option value="3">Tata Nexon</option>
          </select>
        </div>

        <div class="col-md-6">
          <label class="form-label">Customer Name</label>
          <input type="text" class="form-control" name="customer_name" required>
        </div>

        <div class="col-md-6">
          <label class="form-label">Phone</label>
          <input type="tel" class="form-control" name="phone" required>
        </div>

        <div class="col-md-6">
          <label class="form-label">Email</label>
          <input type="email" class="form-control" name="email" required>
        </div>

        <div class="col-md-6">
          <label class="form-label">Pickup Date</label>
          <input type="date" class="form-control" name="pickup_date" required>
        </div>

        <div class="col-md-6">
          <label class="form-label">Return Date</label>
          <input type="date" class="form-control" name="return_date" required>
        </div>

        <div class="col-md-12">
          <label class="form-label">Pickup Location</label>
          <input type="text" class="form-control" name="pickup_location" required>
        </div>

        <div class="col-12 text-end mt-4">
          <button type="submit" class="btn btn-primary"><i class="bi bi-send-check"></i> Confirm Booking</button>
          <a href="bookings.php" class="btn btn-secondary">Cancel</a>
        </div>
      </div>
    </form>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
