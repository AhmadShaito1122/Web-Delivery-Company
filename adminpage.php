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
<link rel="icon" href="https://cdn-icons-png.flaticon.com/512/1048/1048329.png" type="image/x-icom">
<meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    h1 {
      text-align: center;
      color: black;
    }

    .background-image {
      background-image: url("images/admin.jpg");
      background-repeat: no-repeat;
      background-size: cover;
      margin: 0;
      padding: 0;
    }

    body {
      font-family: Arial, Helvetica, sans-serif;
    }

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

    ul {
      list-style-type: none;
      margin: 0;
      padding: 0;
      overflow: hidden;
      background-color: #333;
    }

    li {
      float: left;
    }

    li a {
      display: block;
      color: white;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
    }


    li a:hover {
      background-color: #111;
    }

    .my_container h1 {
      color: yellow;
    }
  </style>
</head>

<body class="background-image">
  <div class="my_container">
    <h1>Admin page</h1>
  </div>
  <div class="topnav">
    <li> <a href="home.php">Home</a></li>
    <li> <a href="adddriversystem.php">Add Driver To System</a></li>
    <li> <a href="viewdrivers.php">View Drivers</a></li>
    <li> <a href="display.php">View All Orders</a></li>
    <li> <a href="displayuser.php">view user</a></li>
    <li><a href="signout.php">Log Out</a></li>
  </div>


</body>

</html>