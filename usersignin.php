<?php
include('useractionsignin.php');

?>
<!DOCTYPE html>
<html>

<head>
  <title>User Signup</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="https://cdn-icons-png.flaticon.com/512/1048/1048329.png" type="image/x-icom">
</head>
<style>
  form {
    padding: 20px;
  }

  label {
    color: black
  }

  * {
    margin: 0;
    padding: 0;
  }





  .formm {
    display: flex;
    flex-direction: column;
    padding: 10px;
    gap: 5px;
    text-align: center;
  }

  #login {

    text-align: center;
    padding: 20px;
    font-weight: bold;
    padding-top: 100px;
    background-color: white;
    border-bottom-right-radius: 30px;
    border-top-right-radius: 30px;
  }



  span {
    color: #ec9a3c;
  }

  #main {
    display: flex;
    flex-direction: row;
    justify-content: center;
    padding: 30px;


  }

  #image {
    background-color: white;
    height: 550px;
    width: 500px;
    border-top-left-radius: 30px;
    border-bottom-left-radius: 30px;
  }

  body {
    background-color: rgb(131, 125, 125, 0.3);
  }
</style>

<body>

  <div id="main">


    <div id="image">
      <img src="images\Login-rafiki.svg" alt="">

    </div>

    <div id="login">
      <h1 style=color:black;>Sign In Page</h1>
      <form ACTION="" METHOD="post">
        <div class="formm">

          <label>UserName :</label>
          <input id="name" name="username" placeholder="username" type="text">
          <label>Password :</label>
          <input id="password" name="password" placeholder="****" type="password">
          <br>
          <input class="button" name="submit" type="submit" value=" Submit ">
        </div><br />
        <div><A Href="register.html"> Register Here </A></div><br>
        <center>
          <div>
            <h1>Dellve<span>roo</span></h1>
          </div>
        </center>
      </form>
    </div>


  </div>
  <!-- <script>

    function openpage() {
      window.location.href = "client.html";
    }
  </script> -->


</body>

</html>