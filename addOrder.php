<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "delivery";
$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
$name = $_POST['name'];
$sql = mysqli_query($conn, "SELECT * FROM user WHERE username='$name'")
  or die("Could not find the table");
while ($qry = mysqli_fetch_array($sql)) {
  $userid = $qry['id'];

}
$desc = $_POST['desc'];
$region1 = $_POST['region1'];
$region2 = $_POST['region2'];
$area = $_POST['area'];
$dtbd = $_POST['dtbd'];
$phone = $_POST['phone'];
$weight = $_POST['weight'];

$cost = 10;
$dbI = mysqli_query($conn, "INSERT INTO orders (descriptio, userid, region, region2, area, dat, phone, weigh, cost, statusord)
 VALUES('$desc','$userid','$region1','$region2','$area','$dtbd','$phone','$weight','$cost','untaken')");
print "<h1>Your order has been added</h1>";
print "<a href='displayforuser.php'>View My order</a> <br><br>";
print "<a href='orders.php'>make another order</a> <br><br>";
print "<a href='client.php'>Get Back</a>";
mysqli_close($conn);

?>