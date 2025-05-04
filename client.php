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
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Client page</title>
  <link rel="icon" href="https://cdn-icons-png.flaticon.com/512/1048/1048329.png" type="image/x-icom">
  <style>
    body {
      padding: 0px;
      margin-top: 0px;
      margin-bottom: 0px;
      margin-left: 0px;
      margin-right: 0px;
      padding: 0;
      font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
      font-size: medium;
    }

    #nav {
      border-bottom: 10px solid rgb(226, 220, 220);
      display: flex;
      flex-direction: row;
      justify-content: space-between;
      height: 75px;
      text-align: center;
      padding-left: 15px;

    }

    #nav img {
      height: 90px;
      width: 90px;
    }

    #navlinks {
      display: flex;
      flex-direction: row;
      padding-top: 15px;

    }

    #nav a {
      float: left;
      color: #000000;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
      font-size: 17px;
      border-radius: 10px;
      height: 25px;
    }


    #nav a:hover {
      background-color: #f1b064;
      color: black;
    }


    #nav a.active {

      color: #000000;
    }

    span {
      color: #ec9a3c;
    }

    #image {
      width: 500px;
      height: 500px;
    }

    #main {
      display: flex;
      flex-direction: row;
      gap: 20px;
      padding-left: 60px;
      padding-right: 60px;
      justify-content: space-between;
    }

    #text {
      justify-content: center;
      display: flex;
      flex-direction: column;
      padding: 40px;
    }
  </style>
</head>

<body>
  <div id="nav">
    <div>
      <h1>Dellve<span>roo</span></h1>
    </div>


    <div id="navlinks">
      <a class="active" href="home.php">Home</a>
      <a href="orders.php">Make Order</a>
      <a href="displayforuser.php">View Orders</a>
      <a href="home.php">Log Out</a>
    </div>
  </div>

  <div id="main">
    <div id="text">
      <h1>Delivery Services</h1>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste assumenda placeat, itaque totam libero
        quibusdam voluptas nam nemo sequi aut aliquid officia at esse ducimus dolore id voluptatibus ea magnam.
      </p>
    </div>
    <div id="image">
      <img src="images\In no time-pana.svg" alt="">
    </div>
  </div>
</body>

</html>