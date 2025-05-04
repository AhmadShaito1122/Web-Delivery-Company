<?PHP
$servername = "localhost";
$username = "root";
$password = "";
$dbname= "delivery";
$con = mysqli_connect($servername, $username, $password,$dbname);
$con=mysqli_connect("localhost","root","","delivery");
if (mysqli_connect_error())
  {
  echo "failed to connect " . mysqli_connect_error();
  }
?>