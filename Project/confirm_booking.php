<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Confirm Booking</title>
  <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <link rel="icon" type="image/png" href="./images/faviconlogo.png">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      background: #f5f7fa;
      font-family: Arial, sans-serif;
    }

    @keyframes zoomIn {
      0% {
        transform: scale(0.6);
        opacity: 0;
      }
      100% {
        transform: scale(1);
        opacity: 1;
      }
    }

    .card {
      animation: zoomIn 0.6s ease;
      overflow: hidden;
      position: relative;
      text-align: left;
      border-radius: 0.5rem;
      max-width: 590px;
      box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1),
                  0 10px 10px -5px rgba(0, 0, 0, 0.04);
      background-color: #fff;
      width: 90%;
    }

    .div_image_v {
      background: #47c9a2;
      border-bottom: none;
      text-align: center;
      border-radius: 5px 5px 0 0;
      padding: 35px;
    }

    .dismiss {
      position: absolute;
      right: 10px;
      top: 10px;
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 0.5rem 1rem;
      background-color: #fff;
      color: black;
      border: 2px solid #D1D5DB;
      font-size: 1rem;
      font-weight: 300;
      width: 30px;
      height: 30px;
      border-radius: 7px;
      cursor: pointer;
      transition: 0.3s ease;
    }

    .dismiss:hover {
      background-color: #ee0d0d;
      border-color: #ee0d0d;
      color: #fff;
    }

    .header {
      padding: 1.25rem 1rem 1rem 1rem;
    }

    .image {
      display: flex;
      margin: auto;
      background-color: #e2feee;
      justify-content: center;
      align-items: center;
      width: 3rem;
      height: 3rem;
      border-radius: 50%;
      animation: animate 0.6s linear alternate-reverse infinite;
    }

    .image svg {
      color: #0afa2a;
      width: 2rem;
      height: 2rem;
    }

    .content {
      margin-top: 0.75rem;
      text-align: center;
    }

    .title {
      color: #066e29;
      font-size: 1.25rem;
      font-weight: 600;
    }

    .message {
      margin-top: 0.5rem;
      color: #595b5f;
      font-size: 0.95rem;
    }

    .btn-ok {
      display: block;
      margin: 1.5rem auto 1rem;
      padding: 10px 25px;
      background-color: #47c9a2;
      color: #fff;
      border: none;
      border-radius: 8px;
      font-size: 1rem;
      font-weight: 600;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    .btn-ok:hover {
      background-color: #34b18b;
    }

    @keyframes animate {
      from {
        transform: scale(1);
      }
      to {
        transform: scale(1.09);
      }
    }
  </style>
</head>
<body>

  <div class="card"> 
    <div class="header"> 
      <div class="div_image_v">
        <div class="image">
          <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M20 7L9.00004 18L3.99994 13" stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
          </svg>
        </div> 
      </div> 
      <div class="content">
        <span class="title">Booking Confirmed!</span> 
        <p class="message">Thank you for your booking. Your car will be ready for pickup as scheduled.</p> 

        <button class="btn-ok" onclick="window.location.href='index.php'">OK</button>
      </div> 
    </div> 
  </div>

</body>
</html>
