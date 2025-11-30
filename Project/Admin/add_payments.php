<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Payment Form</title>
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

    .payment-form {
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

    h2 {
      text-align: center;
      color: #198754;
      margin-bottom: 30px;
    }

    .btn-success {
      transition: 0.3s;
    }

    .btn-success:hover {
      transform: scale(1.05);
    }

    .form-label {
      font-weight: 500;
    }
  </style>
</head>
<body>

<div class="container">
  <div class="payment-form">
    <h2><i class="bi bi-credit-card"></i> Add Payment</h2>

    <form action="save_payment.php" method="POST">
      <div class="row g-3">
        <div class="col-md-6">
          <label class="form-label">Customer Name</label>
          <input type="text" class="form-control" name="customer_name" required>
        </div>

        <div class="col-md-6">
          <label class="form-label">Booking ID</label>
          <input type="text" class="form-control" name="booking_id" required>
        </div>

        <div class="col-md-6">
          <label class="form-label">Transaction ID</label>
          <input type="text" class="form-control" name="transaction_id" required>
        </div>

        <div class="col-md-6">
          <label class="form-label">Amount ($)</label>
          <input type="number" class="form-control" name="amount" required>
        </div>

        <div class="col-md-6">
          <label class="form-label">Payment Mode</label>
          <select class="form-select" name="payment_mode" required>
            <option disabled selected>Select Mode</option>
            <option>On Cash</option>
            <!-- <option value="UPI">UPI</option>
            <option value="Credit Card">Credit Card</option>
            <option value="Debit Card">Debit Card</option>
            <option value="Net Banking">Net Banking</option>
            <option value="Razorpay">Razorpay</option>
            <option value="PayPal">PayPal</option>
            <option value="Stripe">Stripe</option> -->
          </select>
        </div>

        <div class="col-md-6">
          <label class="form-label">Payment Status</label>
          <select class="form-select" name="payment_status" required>
            <option disabled selected>Select Status</option>
            <option value="Paid">Paid</option>
            <option value="Pending">Pending</option>
            <option value="Failed">Failed</option>
          </select>
        </div>

        <div class="col-md-6">
          <label class="form-label">Payment Date</label>
          <input type="date" class="form-control" name="payment_date" required>
        </div>

        <div class="col-md-6">
          <div class="form-check form-switch mt-4">
            <input class="form-check-input" type="checkbox" id="verifySwitch" name="is_verified">
            <label class="form-check-label" for="verifySwitch">Mark as Verified</label>
          </div>
        </div>

        <div class="col-12 text-end mt-4">
          <button type="submit" class="btn btn-success"><i class="bi bi-check-circle"></i> Confirm Payment</button>
          <a href="payments.php" class="btn btn-secondary">Cancel</a>
        </div>
      </div>
    </form>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
