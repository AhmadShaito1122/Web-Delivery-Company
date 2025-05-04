<?php
session_start(); 
if (!isset($_SESSION['login'])){
	echo "You need to login";
	header("Location: signin.php");
}
?>
<?php
include('conn.php');
if($_POST["fullname"])
	{
	
	$edit =  mysqli_query($con," UPDATE driver SET statusfk =( 
     SELECT statusid from status where statusname ='accepted')
	 WHERE dname ='$_POST[fullname]'");
    
    		
    print "<h1>Registration Completed</h1>";
    print "<a href='adminpage.php'>Get Back</a>";
	}
	else print"Invalid Data";

?>
