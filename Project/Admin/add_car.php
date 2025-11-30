<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Add Car</title>
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
    <h2><i class="bi bi-car-front-fill"></i> Add New Car</h2>

    <form action="insert-car.php" method="POST" enctype="multipart/form-data">
      <div class="row g-3">
        <div class="col-md-6">
          <label class="form-label">Car Name</label>
          <input type="text" class="form-control" name="car_name" required>
        </div>

        <div class="col-md-6">
          <label class="form-label">Car Model</label>
          <input type="text" class="form-control" name="car_model" required>
        </div>

        <div class="col-md-4">
          <label class="form-label">Fuel Type</label>
          <select class="form-select" name="fuel_type" required>
            <option selected disabled>Select</option>
            <option value="Petrol">Petrol</option>
            <option value="Diesel">Diesel</option>
            <option value="Electric">Electric</option>
          </select>
        </div>

        <div class="col-md-4">
          <label class="form-label">Transmission</label>
          <select class="form-select" name="transmission" required>
            <option selected disabled>Select</option>
            <option value="Manual">Manual</option>
            <option value="Automatic">Automatic</option>
          </select>
        </div>

        <div class="col-md-4">
          <label class="form-label">Rent Per Day ($)</label>
          <input type="number" class="form-control" name="rent_per_day" required>
        </div>

        <div class="col-md-12">
          <label class="form-label">Car Image</label>
          <input type="file" class="form-control" name="car_image" required>
        </div>

        <div class="col-md-12">
          <label class="form-label">Description</label>
          <textarea class="form-control" rows="3" name="description" required></textarea>
        </div>

        <div class="col-md-6 mt-3">
          <div class="form-check form-switch">
            <input class="form-check-input" type="checkbox" id="statusSwitch" name="car_status" checked>
            <label class="form-check-label" for="statusSwitch">Active</label>
          </div>
        </div>

        <div class="col-12 mt-4 text-end">
          <button type="submit" class="btn btn-success"><i class="bi bi-check-circle"></i> Add Car</button>
          <a href="cars.php" class="btn btn-secondary">Cancel</a>
        </div>
      </div>
    </form>
  </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

