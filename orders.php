<?php
session_start();
if (!isset($_SESSION['login'])) {
  echo "login please";
  header("Location: signin.php");
}
?>
<?php
include('conn.php');
$name = $_SESSION['login'];
$sql = mysqli_query($con, "SELECT * FROM user WHERE username='$name'")
  or die("Could not find the table");
while ($qry = mysqli_fetch_array($sql)) {
  $type = $qry['usertype'];
  $regionfk = $qry['regionfk'];
}
if ($type == 2) {
  $sql = mysqli_query($con, "SELECT * FROM region WHERE regionid='$regionfk'")
    or die("Could not find the table");
  while ($qry = mysqli_fetch_array($sql)) {
    $region1 = $qry['regionname'];
    print "$region1";
  }
}

if ($type == 1) {
  $region1 = "choose your region";
  print "$region1";
}


?>

<html>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
  <script>
    function checkDate() {
      var inputDate = new Date(document.getElementById("date").value);
      var today = new Date();

      if (inputDate < today) {
        alert("Date is invalid!");
      }
      else {
        if (inputDate >= today) {
          return true;
        }
      }
    }
  </script>
</head>
<style>
  .background-image {
    margin: 0;
    padding: 0;
    background-image: url("orderb.jpg");
    height: 100vh;
    background-position: relative;
    background-repeat: no-repeat;
    background-size: 1800px 800px;
  }

  .Rform {

    color: yellow;
    position: absolute;
    weight: bold;
    left: 50%;
    top: 50%;
    text-align: center;
    transform: translate(-50%, -50%);
    background-color: rgba(0, 0, 0, 0.1);
    padding: 30px;
    font-size: 17px;
    font-weight: bold;

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
</style>

<body class=background-image>
  <center>
    <form class=Rform method="POST" action="addOrder.php">

      <h1>Make Your Order </h1>
      <div><label for="name">Full Name:</label>
        <input class="common" type="text" id="name" name="name" placeholder="Full Name" value="<?php print "$name"; ?>"
          readonly></input>
      </div>

      <div><label for="desc">Enter Description:</label>
        <input class="common" type="text" id="desc" name="desc" placeholder="Description" required></input>
      </div>
      <?php
    
          if ($type == "Regular") {
            echo " <label for='desc' style='display:none'>region</label>";
            echo "
      		<input  type='text' id='region1' name='region1'  value='" . $regionfk . "' style='display:none'  ></input>";
          } else
            if ($type == "Commercial") {
      
              echo "<div><label for='region1'>Enter Your Region Please:</label>";
              echo "<select class='common' name='region1' id='region1' value='region1' required>
      <option value='' disabled selected>Choose Region</option>
      <option value='7'>South</option>
      <option value='2'>Beirut</option>
      <option value='12'>Bikaa</option>
      <option value='11'>North</option>
      </select>";
            }
      ?>
      <div><label for="region2"> Region to be delivered:</label>
        <select class="common" name="region2" id="region2" required>
          <option value="" disabled selected>Choose Region</option>
          <option value="7">South</option>
          <option value="2">Beirut</option>
          <option value="11">Bikaa</option>
          <option value="10">North</option>
        </select>
        <div><label for="area">Specific Area :</label>
          <input class="common" type="text" id="area" name="area" required></input>
        </div>
        <div> <label for="date">Date To Be Delivered:</label>
          <input class="input" type="date" id="date" name="dtbd" onchange="checkDate()" required></input>
        </div>

        <div><label for="phone"> Phone Number:</label>
          <input class="input" type="number" id="phone" name="phone" placeholder="+961123456" required></input>
        </div>
        <br>
        <div><label for="weight">Enter Weight:</label>
          <input class="common" type="number" id="weight" name="weight" placeholder="Kg" required></input>
        </div>
        <br>
        <button name="submit" type="submit">Make Order</button>
        <button class="button" onclick="window.location.href = 'client.php';"> Back Home </button>
    </form>
  </center>
</body>

</html>