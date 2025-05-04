<?php
session_start();
if (!isset($_SESSION['login'])) {
	echo "You need to login";
	header("Location: signin.php");
}
?>
<html>

<head>
	<title>Orders</title>
	<link rel="icon" href="https://cdn-icons-png.flaticon.com/512/1048/1048329.png" type="image/x-icom">
	<style>
		body {

			margin: 20px;
			padding: 20px;
			background-image: url("findorde.jpg");
			height: 100vh;
			background-position: relative;
			background-repeat: no-repeat;
			background-size: 1400px 800px;

		}
	</style>
</head>

<body>
	<?php
	include('conn.php');
	$sql = mysqli_query($con, "SELECT * FROM drivers")
		or die("Could not find the table");
	echo '<form >';
	echo '<h1> List Of Drivers:</h1>';
	echo '<table border=4px>';
	echo '<th>Id</th>';
	echo '<th>Full Name</th>';
	echo '<th> email </th>';
	echo '<th> dob </th>';
	echo '<th>phone</th>';
	echo '<th>gender</th>';
	echo '<th>status</th>';

	while ($qry = mysqli_fetch_array($sql)) {

		echo '<tr>';
		echo
			'<td>' . $qry['id'] . '</td>
<td>' . $qry['name'] . '</td>
<td>' . $qry['email'] . '</td>
<td>' . $qry['dob'] . '</td>
<td>' . $qry['phone'] . '</td>
<td>' . $qry['gender'] . '</td>
  <td>';
		echo "<td><a href='deletedriver.php? driverdelete=" . $qry['id'] . "'>Delete</a></td>";
		echo '</tr>';
	}


	echo '</table>';
	echo "<td><a href='adminpage.php'>home</a></td>";
	echo '</form>';


	mysqli_close($con);

	?>

</body>

</html>