<?php

session_start();
$error = '';
if (isset($_POST['submit'])) {
	if (empty($_POST['username']) || empty($_POST['password'])) {
		$error = "Username or Password is invalid";
	} else {
		$fullname = $_POST['username'];
		$pass = $_POST['password'];
		$fullname = stripslashes($fullname);
		$pass = stripslashes($pass);
		$con = mysqli_connect("localhost", "root", "", "delivery");
		$sql = " Select * from admin  where  pass = '$pass' AND  username ='$fullname' ";
		$result = mysqli_query($con, $sql);
		$rows = mysqli_num_rows($result);
		if ($rows == 1) {
			$_SESSION['login'] = $fullname;
			$res = mysqli_fetch_array($result);

			if ($res['username'] == $fullname) {
				header("location: adminpage.php");
			} else {
				$error = "Username or Password is invalid";
			}
			mysqli_close($con);
		}
	}
}
?>