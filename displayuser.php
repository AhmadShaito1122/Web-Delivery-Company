<?php
session_start();
if (!isset($_SESSION['login'])) {
	echo "You need to login";
	header("Location: signin.php");
}
?>
<html>

<head>
	<title>Display Users</title>
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
	$sql = mysqli_query($con, "SELECT * FROM user ")
		or die("Could not find the table");
	echo '<form >';
	echo '<h1> users:</h1>';
	echo '<table border=4px>';
	echo '<th>id</th>';
	echo '<th>Full Name</th>';
	echo '<th> email </th>';

	while ($qry = mysqli_fetch_array($sql)) {

		echo '<tr>';
		echo
			'<td>' . $qry['id'] . '</td>
<td>' . $qry['username'] . '</td>
<td>' . $qry['email'] . '</td>';
		echo '</tr>';
	}

	echo '</table>';
	echo '</form>';