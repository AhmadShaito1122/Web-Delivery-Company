<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Deliveroo</title>
  <link rel="icon" href="https://cdn-icons-png.flaticon.com/512/1048/1048329.png" type="image/x-icom">
  <style>
    body {
      padding: 0px;
      margin-top: 0px;
      margin-bottom: 0px;
      margin-left: 0px;
      margin-right: 0px;
      padding: 0;
      background-color: white;
      color: black;
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
      color: black;
      background-color: #f1b064;

    }


    #nav a.active {

      color: #ec9a3c;
    }

    span {
      color: #ec9a3c;
    }

    .upmain {
      display: flex;
      flex-direction: row;
      gap: 20px;
      padding-left: 60px;
      padding-right: 60px;
      justify-content: space-between;
    }

    .left {
      justify-content: center;
      padding-top: 150px;

    }

    .downmain {
      background-color: rgb(226, 220, 220);
      padding: 60px;
    }


    #text {
      text-align: center;
      padding: 30px;
    }

    .options {
      display: flex;
      flex-direction: row;
      gap: 10px;
    }

    #location-image {
      height: 60px;
      width: 60px;
    }

    .whatwedo {
      padding: 20px;
      border-radius: 10px;
    }

    .whatwedo:hover {
      background-color: white;
    }


    #deliveryimage {
      width: 600px;
      height: 600px;
    }

    #driverbtn {
      background-color: #ec9a3c;
      border-style: none;
      border-radius: 5px;
      width: 20%;
    }

    #driverbtn a {
      color: #000000;
      text-decoration: none;
      font-weight: bold;
    }

    footer {
      background-color: rgb(226, 220, 220);
      justify-content: center;
      display: flex;
      flex-direction: row;
      padding: 20px;
    }

    .footerdata {
      display: flex;
      flex-direction: row;
      padding: 10px;
      border-right: 3px solid black;
    }


    .footerdata a {
      padding-top: 20px;
    }

    h1 {
      font-family: Arial, Helvetica, sans-serif;
    }

    p {
      font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
      font-size: medium;
    }

    #nav a {

      font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
      font-size: medium;
      font-weight: bold;
    }

    .dark-mode {
      background-color: rgb(40, 40, 40);
      color: white;
    }



    .nav-dark a {
      color: white;
    }

    .down-dark {
      background-color: black;
      padding: 60px;
    }

    .footer-dark {
      background-color: #000000;
    }

    .whatwedo-dark:hover {
      background-color: rgb(40, 40, 40);

    }

    #dark {
      height: 20px;
      margin-top: 13px;
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
      <a href="adminsignin.php"> Admin Sign Up</a>
      <a href="driversignin.php"> Driver Sign Up</a>
      <a href="driverregister.php">Not a Member Join us </a>
      <a href="usersignin.php">Sign Up</a>
      <a href="register.php">Register</a>
      <button id="dark" onclick="change_mode()">Dark Mode </button>
    </div>

  </div>

  <div class="upmain">
    <div class="left">
      <div>
        <h1>Order Your Product &nbsp; <br><span>Easier & Faster</span></h1>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Libero sit nam explicabo ut atque aspernatur animi
          necessitatibus facilis aperiam aut in, nihil quisquam qui, recusandae eum suscipit quod, sapiente deleniti.
        </p>
      </div>

    </div>
    <div class="right">
      <img src="images\Delivery address.svg" alt="">
    </div>
  </div>

  <div class="downmain">
    <div id="text">
      <h1><span>Why&nbsp;</span>We Are The Best</h1>
      <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Similique laborum blanditiis incidunt repudiandae
        nesciunt repellendus ratione cupiditate est? Hic distinctio doloremque sapiente architecto debitis. Culpa qui
        eum odit tenetur officia!</p>
    </div>
    <div class="options">
      <div class="whatwedo">
        <img src="images\delivery-man.svg" alt="">
        <h2>Fast Delivery</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis rem sit alias quia ea amet fugiat
          laudantium
          sunt, repudiandae praesentium veritatis. Minus repellat ea ut illo placeat pariatur, libero cupiditate.</p>
      </div>
      <div class="whatwedo">
        <img src="images/order-food.svg" alt="">
        <h2>Online Oreder</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis rem sit alias quia ea amet fugiat
          laudantium
          sunt, repudiandae praesentium veritatis. Minus repellat ea ut illo placeat pariatur, libero cupiditate.</p>
      </div>
      <div class="whatwedo">
        <img id="location-image" src="images/location-cross.svg" alt="">
        <h2>All Over Lebanon</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis rem sit alias quia ea amet fugiat
          laudantium
          sunt, repudiandae praesentium veritatis. Minus repellat ea ut illo placeat pariatur, libero cupiditate.</p>
      </div>
    </div>
  </div>
  <div class="upmain">
    <div class="left">
      <div>
        <h1>Be a Member &nbsp; <br><span>In Our Team</span></h1>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Libero sit nam explicabo ut atque aspernatur animi
          necessitatibus facilis aperiam aut in, nihil quisquam qui, recusandae eum suscipit quod, sapiente deleniti.
        </p>
        <br>
        <button id="driverbtn"><a href="driverregister.php">Join As Driver </a></button>
      </div>

    </div>
    <div class="right">
      <img id="deliveryimage" src="images\preloader.gif" alt="">
    </div>
  </div>
  </div>
  </div>
  <footer id="footer">
    <div class="footerdata">
      <img src="images/location-cross.svg" alt="">
      <h5> &nbsp;&nbsp;Visit Us</h5>
    </div>
    <div class="footerdata">
      <img src="images/sms-tracking.svg" alt="">
      <h5> &nbsp;&nbsp;Contact Us</h5>
    </div>
    <div class="footerdata">
      <a href="https://twitter.com/">
        <img src="images/twitter.svg" alt="">
      </a>
      <a href="https://www.facebook.com/">
        <img src="images/facebook.svg" alt="">
      </a>
      <a href="https://www.instagram.com/">
        <img src="
        images/instagram.svg" alt="">
      </a>

      <h5>&nbsp;&nbsp; Follow Us</h5>
    </div>
  </footer>
  <script>
    // function change_mode( ) {
    //    console.log("dark mode activate");
    //   document.body.style.banmckgroundColor = 'rgb(27, 25, 25)';
    //   document.getElementById("dowain").style.backgroundColor = 'black';
    //    document.body.style.color = 'white'
    //    document.getElementById("footer").style.backgroundColor = 'black';


    // }
    function change_mode() {

      document.getElementsByClassName("downmain")[0].classList.toggle("down-dark")


      document.body.classList.toggle("dark-mode");
      document.getElementsByClassName("whatwedo")[0].classList.toggle("whatwedo-dark")
      document.getElementsByClassName("whatwedo")[1].classList.toggle("whatwedo-dark")
      document.getElementsByClassName("whatwedo")[2].classList.toggle("whatwedo-dark")
      document.getElementById("nav").classList.toggle("nav-dark");
      document.getElementById("footer").classList.toggle("footer-dark");
      var button = document.getElementById("dark");

      if (button.innerHTML == "Dark Mode") {
        console.log(button.innerHTML);
        button.innerHTML = "Light Mode";
      }
      else {
        button.innerHTML = "Dark Mode"
      }

    }
  </script>
</body>

</html>