<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Admin Login</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css"/>
  <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <link rel="icon" type="image/png" href="../images/faviconlogo.png">

<style type="text/css">
  /*Admin login form*/

/* Reset and font */
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Segoe UI", sans-serif;
}

body {
  height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
  background: linear-gradient(135deg, #667eea, #764ba2);
}

/* Login container */
.admin-login-container {
  background: white;
  padding: 2.5rem;
  border-radius: 15px;
  box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
  width: 100%;
  max-width: 400px;
  animation: slideIn 0.7s ease-in-out;
}

@keyframes slideIn {
  from {
    transform: translateY(-30px);
    opacity: 0;
  }
  to {
    transform: translateY(0);
    opacity: 1;
  }
}

/* Form elements */
.admin-login-form h2 {
  text-align: center;
  margin-bottom: 1.5rem;
  color: #333;
}

.admin-input-group {
  position: relative;
  margin-bottom: 1.2rem;
}

.admin-input-group i {
  position: absolute;
  top: 50%;
  left: 10px;
  transform: translateY(-50%);
  color: #555;
}

.admin-input-group input {
  width: 100%;
  padding: 10px 10px 10px 35px;
  border: 1px solid #ccc;
  border-radius: 8px;
  transition: all 0.3s ease;
}

.admin-input-group input:focus {
  border-color: #667eea;
  outline: none;
  box-shadow: 0 0 5px rgba(102, 126, 234, 0.4);
}

.admin-login-btn {
  width: 100%;
  padding: 10px;
  background: #667eea;
  color: white;
  border: none;
  border-radius: 8px;
  font-size: 1rem;
  cursor: pointer;
  transition: background 0.3s;
  display: flex;
  justify-content: center;
  align-items: center;
  gap: 8px;
}

.admin-login-btn:hover {
  background: #5a67d8;
}                                                                                   
</style>
</head>
<body>
  <div class="admin-login-container">
    <form class="admin-login-form" action="checklogin.php" method="POST">
      <h2>Admin Login</h2>

      <?php 
                if (isset($_GET['status'])) 
                {
                    echo '<h5 class="text-center text-danger">Username & Password is Incorrect</h5>';

                }

        ?>
      <div class="admin-input-group">
        <i class="bi bi-person-fill"></i>
        <input type="text" placeholder="Username" name="Username" required />
      </div>

      <div class="admin-input-group">
        <i class="bi bi-lock-fill"></i>
        <input type="password" placeholder="Password" name="Password" required />
      </div>

      <button type="submit" class="admin-login-btn">Login <i class="bi bi-box-arrow-in-right"></i></button>
    </form>
  </div>
</body>
</html>
