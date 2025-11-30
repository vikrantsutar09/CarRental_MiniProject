<?php 
  session_start();

   if (!isset($_SESSION['user'])) 
  {
        header("Location:login.php");          
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Admin Dashboard</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css" rel="stylesheet">
  <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <link rel="icon" type="image/png" href="../images/faviconlogo.png">
  <link rel="stylesheet" type="text/css" href="admin_style.css">


</head>
<body>

<?php include('sidebar.php')?>
<?php include('connection.php')?>
<?php
$result = mysqli_query($conn, "SELECT * FROM cars");
$count = mysqli_num_rows($result);
//echo "Total rows: " . $count;
?>
<?php
$result = mysqli_query($conn, "SELECT * FROM booking");
$count_b = mysqli_num_rows($result);
//echo "Total rows: " . $count;
?>
<?php
$result = mysqli_query($conn, "SELECT * FROM driver");
$count_d = mysqli_num_rows($result);
//echo "Total rows: " . $count;
?>

    <!-- Main Content -->
    <div class="container mt-5">
      <h2><i class="bi bi-speedometer2"></i> Dashboard</h2>
      <div class="row mt-4">
        <div class="col-md-6">
            <a href="cars.php" class="text-decoration-none">
          <div class="card text-white bg-primary text-center p-3 mb-3">
              <div class="card-body">
              <h5 class="card-title">Total Cars</h5>
              <p class="card-text fs-4"><?php echo $count;?></p>
            </div>
          </div>
        </a>
        </div>
        <div class="col-md-6">
          <a href="users.php" class="text-decoration-none">
          <div class="card text-white bg-warning text-center p-3 mb-3">
            <div class="card-body">
              <h5 class="card-title">Users</h5>
              <p class="card-text fs-4">4</p>
            </div>
          </div>
        </a>
        </div>
        <div class="col-md-6">
          <a href="bookings.php" class="text-decoration-none">
          <div class="card text-white bg-success text-center p-3 mb-3">
            <div class="card-body">
              <h5 class="card-title">Active Bookings</h5>
              <p class="card-text fs-4"><?php echo $count_b;?></p>
            </div>
          </div>
        </a>
        </div>
        <div class="col-md-6">
          <a href="drivers.php" class="text-decoration-none">
          <div class="card text-white bg-danger text-center p-3 mb-3">
            <div class="card-body">
              <h5 class="card-title">Driver</h5>
              <p class="card-text fs-4"><?php echo $count_d;?></p>
            </div>
          </div>
        </a>
        </div>

        <div class="col-md-6">
          <a href="payments.php" class="text-decoration-none">
          <div class="card text-white bg-secondary text-center p-3 mb-3">
            <div class="card-body">
              <h5 class="card-title">Payments</h5>
              <p class="card-text fs-4">50</p>
            </div>
          </div>
        </a>
        </div>
  
        <!-- <div class="col-md-3">
          <div class="card text-white bg-danger mb-3">
            <div class="card-body">
              <h5 class="card-title">Revenue</h5>
              <p class="card-text fs-4">$5,000</p>
            </div>
          </div>
        </div> -->
      </div>
    </div>
  </div>

<!-- <?php include('footer.php')?> -->