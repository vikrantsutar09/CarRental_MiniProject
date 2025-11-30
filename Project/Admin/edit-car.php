  <?php
// Database connection
  $conn = new mysqli("localhost", "root", "", "speedoo");
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  $c_id = isset($_GET['id']) ? (int)$_GET['id'] : 0;

  $sql = "SELECT * FROM cars WHERE c_id = $c_id";
  $result = $conn->query($sql);

  if ($result->num_rows == 0) {
    echo "Car not found!";
    exit;
  }

  $car = $result->fetch_assoc();
  // $img_path=$car['car_image'];
?>


  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Edit Car</title>
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
        <h2><i class="bi bi-car-front-fill"></i> Edit  Car</h2>

        <form action="edit-car-code.php" method="POST" enctype="multipart/form-data">
          <input type="hidden" name="c_id" value="<?= $car['c_id'] ?>">
          <div class="row g-3">
            <div class="col-md-6">
              <label class="form-label">Car Name</label>
              <input type="text" class="form-control" name="car_name" value="<?= $car['car_name'] ?>" required>
            </div>

            <div class="col-md-6">
              <label class="form-label">Car Model</label>
              <input type="text" class="form-control" name="car_model" value="<?= $car['car_model'] ?>" required>
            </div>

            <div class="col-md-4">
              <label class="form-label">Fuel Type</label>
              <select class="form-select" name="fule_type" required>
                <option <?= $car['fule_type'] == 'Petrol' ? 'selected' : '' ?> value="Petrol">Petrol</option>
                <option <?= $car['fule_type'] == 'Diesel' ? 'selected' : '' ?> value="Diesel">Diesel</option>
                <option <?= $car['fule_type'] == 'Electric' ? 'selected' : '' ?> value="Electric">Electric</option>
              </select>
            </div>

            <div class="col-md-4">
              <label class="form-label">Transmission</label>
              <select class="form-select" name="transmission" required>
                <option selected disabled>Select</option>
                <option <?= $car['transmission'] == 'Manual' ? 'selected' : '' ?> value="Manual">Manual</option>
                <option <?= $car['transmission'] == 'Automatic' ? 'selected' : '' ?> value="Automatic">Automatic</option>
              </select>
            </div>

            <div class="col-md-4">
              <label class="form-label">Rent Per Day ($)</label>
              <input type="number" class="form-control" name="rent_per_day" value="<?= $car['rent_per_day'] ?>"  required>
            </div>

            <div class="col-md-6">
              <label class="form-label">Current Image</label><br>
              <img src="<?= $car['car_image'] ?>" alt="Car Image" class="img-fluid rounded mb-2" style="max-width: 100px;">
            </div>
            <div class="col-md-6">
              <label class="form-label">Change Image</label>
              <input type="file" class="form-control" name="car_image">
            </div>

            <div class="col-md-12">
              <label class="form-label">Description</label>
              <textarea class="form-control" rows="3" name="description" required><?= $car['description'] ?></textarea>
            </div>

            <div class="col-md-6 mt-3">
              <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" id="statusSwitch" name="car_status" <?= $car['car_status'] == '1' ? 'checked' : '' ?> checked>
                <label class="form-check-label" for="statusSwitch">Active</label>
              </div>
            </div>

            <div class="col-12 mt-4 text-end">
              <a href="edit-car-code.php">
              <button type="submit" class="btn btn-success"><i class="bi bi-check-circle"></i> Update Car</button></a>
              <a href="cars.php" class="btn btn-secondary">Cancel</a>
            </div>
          </div>
        </form>
      </div>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

