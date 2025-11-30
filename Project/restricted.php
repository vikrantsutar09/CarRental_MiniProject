<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Website Restricted</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body, html {
      height: 100%;
      margin: 0;
      font-family: 'Segoe UI', sans-serif;
      color: #fff;
      overflow: hidden;
    }

    /* Fullscreen background video */
    #bg-video {
      position: fixed;
      right: 0;
      bottom: 0;
      min-width: 100%;
      min-height: 100%;
      object-fit: cover;
      z-index: -1;
      filter: brightness(0.3);
    }

    .content-box {
      background: rgba(0, 0, 0, 0.7);
      padding: 40px;
      border-radius: 15px;
      box-shadow: 0 0 20px rgba(255, 0, 0, 0.6);
      max-width: 750px;
      margin: auto;
      text-align: center;
    }

    h1 {
      color: #ff4d4d;
      font-weight: bold;
    }

    h4 {
      color: #ff9999;
    }

    .btn-danger {
      margin-top: 20px;
      padding: 10px 25px;
      font-size: 18px;
      border-radius: 10px;
    }

    p {
      color: #ccc;
    }

    .main-wrapper {
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
    }
  </style>
</head>
<body>

  <!-- Background Video -->
  <video autoplay muted loop id="bg-video">
    <source src="images/video.mp4" type="video/mp4">
    Your browser does not support HTML5 video.
  </video>

  <!-- Main Content -->
  <div class="main-wrapper">
    <div class="content-box">
      <h1>Website Restricted By Developer</h1>
      <h4>Due To Incomplete Payments Of Development.</h4>
      <p>
        If you are a site owner, contact the developer and make payment until <b>10th October 2024</b>.<br>
        After this date, all data of website will be lost.
      </p>
      <a href="about.php" class="btn btn-danger">About Dev.</a>
    </div>
  </div>

</body>
</html>
