<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Manage Payments</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css" rel="stylesheet">
  <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <link rel="icon" type="image/png" href="../images/faviconlogo.png">
  <style>
    body {
      background-color: #f4f6f9;
    }
    .table th, .table td {
      vertical-align: middle;
    }
    .badge-paid {
      background-color: #198754;
    }
    .badge-pending {
      background-color: #ffc107;
      color: #000;
    }
    .badge-failed {
      background-color: #dc3545;
    }
  </style>
</head>
<body>

<?php include('sidebar.php')?>

  <div class="container mt-5">
    <h2 class="mb-4"><i class="bi bi-cash-coin"></i> Manage Payments</h2>

    <div class="mb-3 text-end">
      <a href="add_payments.php">
        <button class="btn btn-primary" data-bs-toggle="" data-bs-target=""><i class="bi bi-plus-circle"></i> Add Payments</button>
      </a>
    </div>

    <!-- Payments Table -->
    <div class="table-responsive">
      <table class="table table-bordered table-hover shadow-sm">
        <thead class="table-dark text-center">
          <tr>
            <th>ID</th>
            <th>Transaction ID</th>
            <th>Customer</th>
            <th>Booking ID</th>
            <th>Amount</th>
            <th>Date</th>
            <th>Status</th>
            <th>Mode</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody class="text-center">
          <tr>
            <td>1</td>
            <td>TXN123456</td>
            <td>Rahul Sharma</td>
            <td>BK001</td>
            <td>$200</td>
            <td>2025-04-05</td>
            <td><span class="badge badge-paid">Paid</span></td>
            <td> On Cash </td>
            <td>
              <button class="btn btn-sm btn-info" title="View Receipt"><i class="bi bi-receipt-cutoff"></i></button>
              <button class="btn btn-sm btn-danger" title="Refund"><i class="bi bi-arrow-counterclockwise"></i></button>
            </td>
          </tr>

        </tbody>
      </table>
    </div>
  </div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
