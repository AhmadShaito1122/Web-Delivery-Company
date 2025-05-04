<?php

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

$id = $_GET['id']; 
print"$id";

$del = mysqli_query($con, "Delete from orders where orderid = '$id' "); 

if($del)
{
    mysqli_close($con); 
    header("location:display.php");
    exit;	
}
else
{
    echo "Error deleting record"; 
}
?>