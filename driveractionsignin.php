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
		$sql = " Select * from drivers  where  pass = '$pass' AND  name='$fullname' ";
		$result = mysqli_query($con, $sql);
		$rows = mysqli_num_rows($result);

		if ($rows == 1) {
			$_SESSION['login'] = $fullname;
			$res = mysqli_fetch_array($result);

			if ($res['name'] == $fullname) {
				header("location: driverpage.php");

			} else {
				$error = "Username or Password is invalid";
				echo "<h1>$error</h1>";
			}
			mysqli_close($con);
		}
	}
}
?>