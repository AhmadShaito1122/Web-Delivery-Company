<?php
session_start(); 
if (!isset($_SESSION['login'])){
	echo "You need to login";
	header("Location: signin.php");
}
?>
<?php

 if($_POST["subject"]&& $_POST["orderid"]){
 $servername="localhost";
    $username="root";
    $conn=  mysqli_connect($servername,$username,"","delivery")or die(mysql_error());
	
    $sqlq= " INSERT INTO feedback (feedbackname) VALUES('$_POST[subject]')";
    $result=mysqli_query($conn,$sqlq) or die(mysql_error());		
    print "<h1>Thank you for your feedback</h1>";
    print "<a href='client.php'>Home Page</a>"; 
 } 
 
include('conn.php');
 
$sql = mysqli_query($con, "SELECT * FROM feedback WHERE feedbackname='$_POST[subject]'")
or die ("Could not find the table");
while($qry = mysqli_fetch_array($sql)){
	$feedbackid= $qry['feedbackid'];
}
?>
<?php
$servername="localhost";
    $username="root";
    $conn=  mysqli_connect($servername,$username,"","delivery")or die(mysql_error());
$sqlqq= "  UPDATE orders SET feedbackfk = '$feedbackid' WHERE orderid ='$_POST[orderid]'";
    $result=mysqli_query($conn,$sqlqq) or die(mysql_error());
 ?>