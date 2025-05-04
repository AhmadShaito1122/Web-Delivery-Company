<?php
include('driveractionsignin.php');

?>

<!DOCTYPE html>
<html lang="en">
<link rel="icon" href="https://cdn-icons-png.flaticon.com/512/1048/1048329.png" type="image/x-icom">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Deriver Sign In</title>
  <style>
    #form {

      color: #000000;

      font-weight: bold;
      width: 300px;
      text-align: center;
      border-radius: 20px;
      background-color: white;
      padding: 30px;
      font-size: 17px;
      font-weight: bold;
    }

    .button {
      padding: 10px 10px;
      background-color: #2a2a2a;
      color: white;
      font-weight: bold;
      border: none;
      margin: 0 auto;
      width: 105%;
      cursor: pointer;

      border-radius: 4px;



    }

    .button:hover {
      background-color: #999191;
    }

    input {
      width: 100%;
      padding: 5px;
      margin: 2px;

    }

    #main {
      display: flex;
      flex-direction: row;
      justify-content: center;
      padding: 30px;
    }

    #image {


      width: 500px;
    }

    span {
      color: #ec9a3c;
    }

    #body {
      padding-top: 120px;
    }

    body {
      margin: 0px;
      background-color: rgb(226, 220, 220)
    }
  </style>
</head>

<body>
  <div id="body">
    <div id="main">
      <div id="form">
        <h1>
          Sign In Page
        </h1>
        <form action="" method="post">
          <label for="name">UserName :</label>
          <input id="name" name="username" placeholder="username" type="text">
          <label for="password">Password :</label>
          <input id="password" name="password" placeholder="****" type="password">
          <br>
          <br>

          <center> <input class="button" type="submit" name="submit" value="submit"></input><br>
            <br>
        </form>
        <div>
          <h1>Dellve<span>roo</span></h1>
        </div>
        </center>
      </div>
      <div id="image">
        <img src="images\Take Away-cuate.svg" alt="">
      </div>
    </div>
  </div>
  <!-- <script>

    function openpage() {
      window.location.href = "deriverpage.html";
    } -->
  </script>

</body>

</html>