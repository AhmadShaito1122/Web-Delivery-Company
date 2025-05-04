<?php
session_start(); 
if (!isset($_SESSION['login'])){
	echo "You need to login";
	header("Location: signin.php");
}
?>
<?php
include('conn.php');
 $id = $_GET['id']; 
$name = $_SESSION['login'];
$sql = mysqli_query($con, "SELECT * FROM driver WHERE dname='$name'")
or die ("Could not find the table");
while($qry = mysqli_fetch_array($sql)){
	$driverno= $qry['driverno'];
	
}
 $qry = mysqli_query($con,"select * from orders where orderid='$id'"); 

 $data = mysqli_fetch_array($qry); 

 if(isset($_POST['submit'])) 
 {
   
 $edit =  mysqli_query($con,"UPDATE orders SET driverfk = '$driverno',statusfk ='3' WHERE orderid =$id");

        
     header("location:driverpage.php"); 
       
    
 }
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<style>


</style>

</head>
<body >

<form  method="POST" >
<h1>Order Details </h1>
<div> <label for="coach">Name Of Customer:</label><br>
<input class="common"  type="text" id="fullname" name="fullname" required value="<?php echo $data['userfk'] ?>" readonly></input><br>
<label for="major">Description of order</label><br>
<input class="common" type="text" id="description" name="description" required value="<?php echo $data['description'] ?>"  readonly></input><br>
<label for="date">Region from :</label><br>
<input class="common"  type="text" id="region" name="region" required value="<?php echo $data['regionfk'] ?>" readonly></input><br>
<label for="time">region To:</label><br>
<input class="common"  type="text" id="region2" name="region2" required value="<?php echo $data['region2fk'] ?>" readonly></input><br>
<label for="time">Specific Area:</label><br>
<input class="common"  type="text" id="area" name="area" required value="<?php echo $data['orderarea'] ?>" readonly></input></div><br>
<label for="date">Date to be delivered :</label><br>
<input class="common"  type="date" id="date" name="date" required value="<?php echo $data['dtbd'] ?>" readonly></input><br>
<label for="time">Phone Number:</label><br>
<input class="common"  type="number" id="phone" name="phone" required value="<?php echo $data['phone'] ?>" readonly></input><br>
<label for="email">weight</label><br>
<input class="common" type="number" id="weight" name="weight" required value="<?php echo $data['weight'] ?>" readonly></input></div><br>

<br>
<input type="submit" name="submit" value="Take Order"> </input></br>
<a href='driverpage.php'> Back</a>
</form>
</body>  