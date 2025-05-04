<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register</title>
  <link rel="icon" href="https://cdn-icons-png.flaticon.com/512/1048/1048329.png" type="image/x-icom">
  <style>
    #form {

      color: #000000;

      font-weight: bold;

      text-align: center;
      border-radius: 20px;
      background-color: rgb(226, 220, 220);
      padding: 30px;
      font-size: 17px;
      font-weight: bold;
    }

    .button {
      padding: 10px 20px;
      background-color: #2a2a2a;
      color: white;
      font-weight: bold;
      border: none;
      margin: 0 auto;
      width: 100%;
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

      height: 550px;
      width: 500px;
    }

    span {
      color: #ec9a3c;
    }

    #body {
      background-color: #ec9a3c;
    }

    body {
      margin: 0px;
    }
  </style>
</head>

<body>
  <div id="body">
    <div id="main">
      <div id="form">

        <h1>Fill Your Details </h1>
        <form ACTION="regform.php" METHOD="post">
          <select id="type" name="type">
            <option value="Regular">Regular</option>
            <option value="Commercial">Commercial</option>
          </select>
          <div><label for="fullname">Fullname:</label><br>
            <input name="fullname" type="text" required></input><br>
          </div>

          <div><label for="pass">Password:</label><br>
            <input name="pass" type="password" required></input><br>
          </div>

          <div><label for="repass">Re-enter Password:</label><br>
            <input name="repass" type="password" required></input><br>
          </div>
          <div><label for="email">Email Address:</label><br>
            <input name="email" name type="email" required></input>
          </div>
          <div><select class="common" name="region" id="region" value="region" required>
              <option value="" disabled selected>Choose Region</option>
              <option value="South">South</option>
              <option value="Beirut">Beirut</option>
              <option value="Bikaa">Bikaa</option>
              <option value="North">North</option>
            </select></div>
          <br>
          <center> <input class="button" name="submit" type="submit" value="Register"></input><br>
            <br>
        </form>
        <div>
          <h1>Dellve<span>roo</span></h1>
        </div>
        </center>
      </div>
      <div id="image">
        <img src="images\Online Groceries-amico.svg" alt="">
      </div>
    </div>
  </div>
</body>

</html>