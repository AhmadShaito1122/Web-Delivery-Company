<?php
session_start();
if (!isset($_SESSION['login'])) {
	echo "You need to login";
	header("Location: signin.php");
}
?>

<!-- <?php
function drivername($d)
{
	include('conn.php');
	$res = mysqli_query($con, "SELECT dname FROM driver WHERE driverno = '$d'");
	$row = mysqli_fetch_row($res);
	echo "$row[0]";
}
?>
<?php
function feedback($r)
{
	include('conn.php');
	$resr = mysqli_query($con, "SELECT feedbackname FROM feedback WHERE feedbackid = '$r'");
	$row = mysqli_fetch_row($resr);
	echo "$row[0]";
}
?> -->
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
	$sql = mysqli_query($con, "SELECT * FROM orders WHERE statusord=''")
		or die("Could not find the table");
	echo '<form >';
	echo '<h1> Untaken Orders Are:</h1>';
	echo '<table border=4px>';
	echo '<th>id</th>';
	echo '<th>Full Name</th>';
	echo '<th> Weight </th>';
	echo '<th> Description </th>';
	echo '<th>Date of Drlivey</th>';
	echo '<th>phone number</th>';
	echo '<th>Email</th>';
	echo '<th>Specific Area</th>';
	echo '<th>LOCATION</th>';
	echo '<th>Delivery Cost</th>';

	while ($qry = mysqli_fetch_array($sql)) {

		echo '<tr>';
		echo
			'<td>' . $qry['orderid'] . '</td>
<td>' . $qry['description'] . '</td>
<td>' . $qry['userfk'] . 'Kg</td>
<td>' . $qry['regionfk'] . '</td>
<td>' . $qry['region2fk'] . '</td>
<td>' . $qry['orderarea'] . '</td>
<td>' . $qry['dtbd'] . '</td>
<td>' . $qry['phone'] . '</td>
<td>' . $qry['weight'] . '</td>
<td>' . $qry['cost'] . '</td>]';
		echo "<td><a href='deleteorders.php? id=" . $qry['orderid'] . "'>Delete</a></td>";
	}
	echo '</tr>';
	echo '</table>';
	echo '</form>';


	$sql = mysqli_query($con, "SELECT * FROM orders WHERE statusord='3'")
		or die("Could not find the table");
	echo '<form >';
	echo '<h1> Pending Orders Are:</h1>';
	echo '<table border=4px>';
	echo '<th>ID</th>';
	echo '<th>order id</th>';
	echo '<th>description</th>';
	echo '<th> userfk </th>';
	echo '<th>Region1</th>';
	echo '<th>region2</th>';
	echo '<th>orderarea</th>';
	echo '<th>dtbd</th>';
	echo '<th>Phone</th>';
	echo '<th>Weight</th>';
	echo '<th>cost</th>';
	echo '<th style="color:red">Driver Name</th>';
	while ($qry = mysqli_fetch_array($sql)) {
		$did = $qry['driverfk'];
		echo '<tr>';
		echo
			'<td>' . $qry['orderid'] . '</td>
	<td>' . $qry['description'] . '</td>
	<td>' . $qry['userfk'] . '</td>
	<td>' . $qry['orderarea'] . '</td>
	<td>' . $qry['regionfk'] . '</td>
	<td>' . $qry['region2fk'] . '</td>
	<td>' . $qry['orderarea'] . '</td>
	<td>' . $qry['dtbd'] . '</td>
	<td>' . $qry['phone'] . '</td>
	<td>' . $qry['weight'] . '</td>
	<td>' . $qry['cost'] . '$</td>';
		echo "<td style='color:red'>";
		echo drivername($did);
		echo "</td>";


		echo "<td><a href='deletetakenorders.php? id=" . $qry['orderid'] . "'>Delete</a></td>";
	}
	echo '</tr>';
	echo '</table>';
	echo '</form>';
	$sql = mysqli_query($con, "SELECT * FROM orders WHERE statusord='4'")
		or die("Could not find the table");
	echo '<form >';
	echo '<h1> Recieved Orders Are:</h1>';
	echo '<table border=4px>';
	echo '<th>ID</th>';
	echo '<th>order id</th>';
	echo '<th>description</th>';
	echo '<th> userfk </th>';
	echo '<th>Region1</th>';
	echo '<th>region2</th>';
	echo '<th>orderarea</th>';
	echo '<th>dtbd</th>';
	echo '<th>Phone</th>';
	echo '<th>Weight</th>';
	echo '<th>cost</th>';
	echo '<th style="color:red">Driver Name</th>';
	echo '<th>feedback</th>';
	while ($qry = mysqli_fetch_array($sql)) {
		$did = $qry['driverfk'];
		$feedback = $qry['feedbackfk'];
		echo '<tr>';
		echo
			'<td>' . $qry['orderid'] . '</td>
	<td>' . $qry['description'] . '</td>
	<td>' . $qry['userfk'] . '</td>
	<td>' . $qry['orderarea'] . '</td>
	<td>' . $qry['regionfk'] . '</td>
	<td>' . $qry['region2fk'] . '</td>
	<td>' . $qry['orderarea'] . '</td>
	<td>' . $qry['dtbd'] . '</td>
	<td>' . $qry['phone'] . '</td>
	<td>' . $qry['weight'] . '</td>
	<td>' . $qry['cost'] . '$</td>';
		echo "<td style='color:red'>";
		echo drivername($did);
		echo "</td>";
		echo "<td style='color:red'>";
		echo feedback($feedback);
		echo "</td>";


		echo "<td><a href='deletetakenorders.php? id=" . $qry['orderid'] . "'>Delete</a></td>";
	}
	echo '</tr>';
	echo '</table>';
	echo '</form>';

	echo "<a style=color:red href='adminpage.php'>BACK</a>";
	mysqli_close($con);

	?>
</body>

</html>