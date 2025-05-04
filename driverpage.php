<?php
session_start();
if (!isset($_SESSION['login'])) {
  echo "login please";
  header("Location: signin.php");
}
?>
<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="https://cdn-icons-png.flaticon.com/512/1048/1048329.png" type="image/x-icom">
  <style>
    .topnav {
      background-color: #444;
      overflow: hidden;
    }


    .topnav a {
      float: left;
      color: white;
      text-align: center;
      padding: 14px 19px;
      text-decoration: bold;
      font-size: 17px;
    }


    .topnav a:hover {
      background-color: yellow;
      color: white;
    }


    .topnav a.active {

      color: white;
    }

    .backimage {
      background-image: url("deiverhome.jpg");
      background-repeat: no-repeat;
      background-size: 1400px 800px;
      margin: 0;
      padding: 0;
    }

    body {
      font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
      font-size: medium;
    }
  </style>
</head>

<body class="backimage">

  <h1 style="color:yellow;"> Welcome To the Delivery Company </h1>
  <div class="topnav">
    <a class="active" href="home.php">Home</a>
    <a href="displayfordriver.php">Take order</a>
    <a href="viewmyorders.php">My Orders</a>
    <a href="index.php">Log Out</a>
  </div>

</body>

</html>