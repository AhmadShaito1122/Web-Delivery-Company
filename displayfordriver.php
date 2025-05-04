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
	function username($u)
	{
		include('conn.php');
		$res = mysqli_query($con, "SELECT username FROM user WHERE id = '$u'");
		$row = mysqli_fetch_row($res);
		echo "$row[0]";
	}
	?>
	<?php
	function regionname($r)
	{
		include('conn.php');
		$resr = mysqli_query($con, "SELECT regionname FROM region WHERE regionid = '$r'");
		$row = mysqli_fetch_row($resr);
		echo "$row[0]";
	}
	?>
	<?php
	include('conn.php');
	$sql = mysqli_query($con, "SELECT * FROM orders WHERE statusfk='1'")
		or die("Could not find the table");
	echo '<form >';
	echo '<h1> Available Delivery orders:</h1>';
	echo '<table border=4px>';
	echo '<th>id</th>';
	echo '<th>desc</th>';
	echo '<th>Recieving Area</th>';
	echo '<th>Date of Drlivey</th>';
	echo '<th>phone number</th>';
	echo '<th>Delivery Cost</th>';
	echo '<th> username </th>';
	echo '<th> source</th>';
	echo '<th> Destination </th>';
	while ($qry = mysqli_fetch_array($sql)) {
		$did = $qry['userfk'];
		$rid = $qry['regionfk'];
		$rtid = $qry['region2fk'];

		echo '<tr>';
		echo
			'<td>' . $qry['orderid'] . '</td>
<td>' . $qry['description'] . '</td>
<td>' . $qry['orderarea'] . '</td>
<td>' . $qry['dtbd'] . '</td>
<td>' . $qry['phone'] . '</td>
<td>' . $qry['cost'] . '$</td>';
		echo "<td>";
		echo username($did);
		echo "</td>";
		echo "<td>";
		echo regionname($rid);
		echo "</td>";
		echo "<td>";
		echo regionname($rtid);
		echo "</td>";

		echo "<td><a href='takeit.php? id=" . $qry['orderid'] . "'>Take Order</a></td>";
	}
	echo '</tr>';
	echo '</table>';
	echo '</form>';
	?>


	<a href="driverpage.php"> back</a>
</body>

</html>