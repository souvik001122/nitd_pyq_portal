<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Logos</title>
  <style>
    body, html {
      height: 100%;
      margin: 0;
      font-family: Arial, sans-serif;
    }

    .background {
      background-image: url('image.png');
      background-size: cover;
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      opacity: 0.5;
    }

    .logos {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100%;
    }

    .logo {
      font-weight: bold;
      font-size: 24px;
      padding: 10px 20px;
      border-radius: 5px;
      margin: 10px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    .logo.btech {
      background-color: #3498db;
      color: #fff;
      opacity: 0.9;
      height:100px;
      width:100px;
    }

    .logo.mtech {
      background-color: #2ecc71;
      color: #fff;
      opacity: 0.9;
      height:100px;
      width:100px;
    }

    .logo.phd {
      background-color: #9b59b6;
      color: #fff;
      opacity: 0.9;
      height:100px;
      width:100px;
    }

    .logo:hover {
      background-color: #34495e;
    }
    p{
        text-align: center;
    }
  </style>
</head>
<body>
  <div class="background"></div>
  <div class="logos">
    <div class="logo btech"><p>BTech</p></div>
    <div class="logo mtech"><p>MTech</p></div>
    <div class="logo phd"><p>PhD</p></div>
  </div>
</body>
</html>
