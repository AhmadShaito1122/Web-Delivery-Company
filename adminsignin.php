<?php
include('adminactionsignin.php');

?>

<!DOCTYPE html>
<html>

<head>
  <title>Admin Signup</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="https://cdn-icons-png.flaticon.com/512/1048/1048329.png" type="image/x-icom">
</head>
<style>
  .form {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    background-color: rgb(131, 125, 125, 0.5);
    padding: 30px;
    gap: 5px;
  }

  label {
    color: white
  }

  * {
    margin: 0;
    padding: 0;
  }

  .background-image {
    background-image: url("images/admin.jpg");
    height: 100vh;
    background-position: relative;
    background-repeat: no-repeat;
    background-size: cover;
    justify-content: center;
    align-items: center;
    display: flex;
  }

  #login {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    padding: 30px;
  }

  .sign {
    position: absolute;
    left: 400px;
    top: 120px;
    border-collapse: separate;


  }
</style>

<body>
  <div class="background-image">



    <div id="login">

      <form action="" method="post">
        <div class="form">
          <h1 style=color:white;>Admin Sign Up Page</h1>
          <label style=color:yellow;>UserName :</label>
          <input id="name" name="username" placeholder="username" type="text">
          <label style=color:yellow;>Password :</label>
          <input id="password" name="password" placeholder="****" type="password">
          <br>
          <input id="submitbtn" name="submit" type="submit" value="Submit">


        </div><br />
      </form>

    </div>
  </div>
  <script>

    // function openpage() {
    //   window.location.href = "adminpage.html";
    // }
  </script>

</body>

</html>