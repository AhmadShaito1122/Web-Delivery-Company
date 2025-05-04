<?php
session_start();
if (!isset($_SESSION['login'])) {
   echo "You need to login";
   header("Location: signin.php");
}
?>

<?php
include('conn.php');
$name = $_SESSION['login'];

$sql = mysqli_query($con, "SELECT * FROM user WHERE username='$name'")
   or die("Could not find the table");
while ($qry = mysqli_fetch_array($sql)) {
   $userid = $qry['id'];

}
?>
<?php
function drivername($d)
{
   include('conn.php');
   $res = mysqli_query($con, "SELECT dname FROM driver WHERE driverno = '$d'");
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
<html>

<head>
   <link rel="icon" href="https://cdn-icons-png.flaticon.com/512/1048/1048329.png" type="image/x-icom">
   <title>View All My Orders</title>
   <style>
      .background-image {
         margin: 20px;
         padding: 20px;
         background-image: url("findorde.jpg");
         height: 100vh;
         background-position: relative;
         background-repeat: no-repeat;
         background-size: 1400px 800px;
      }

      .Rform {

         color: yellow;
         position: absolute;
         weight: bold;
         left: 50%;
         top: 50%;
         text-align: center;
         transform: translate(-50%, -50%);
         background-color: rgba(0, 0, 0, 0.1);
         padding: 30px;
         font-size: 17px;
         font-weight: bold;
      }

      .button {
         background-color: black;
      }

      table,
      th,
      td {
         border: 1px solid black;
      }
   </style>
</head>

<body class=background-image>
   <h1>username :

      <?php
      include('conn.php');
      $name = $_SESSION['login'];
      print "$name";
      $sql = "select * from orders where userid='$userid' AND statusord='1'";
      $qry = mysqli_query($con, $sql);

      if (mysqli_num_rows($qry) > 0) {
         ?>
      </h1>
      <div> Here is your orders
         <table>
            <h1>my Orders:</h1>
            <thead>
               <tr>
                  <th>orderno</th>
                  <th>Desc</th>
                  <th>Area</th>
                  <th>Date To Be Delivered</th>
                  <th>Phone</th>
                  <th>Weight</th>
                  <th>Cost</th>
                  <th>source</th>
                  <th>Destination</th>
               </tr>

            </thead>

            <tbody>
               <?php


               foreach ($qry as $qry) {
                  $rid = $qry['regionfk'];
                  $rtid = $qry['region2fk'];
                  echo "<tr><td>" . $qry['orderid'] . "</td>
				<td>" . $qry['description'] . "</td>
                 <td>" . $qry['orderarea'] . "</td>
                 <td>" . $qry['dtbd'] . "</td>
                 <td>" . $qry['phone'] . "</td>	
				<td>" . $qry['weight'] . "</td>
				<td>" . $qry['cost'] . "$</td>";
                  echo "<td>";
                  echo regionname($rid);
                  echo "</td>";
                  echo "<td>";
                  echo regionname($rtid);
                  echo "</td>";

               }

      }


      ?>
         </tbody>
      </table>
   </div>
   <?php
   include('conn.php');
   $name = $_SESSION['login'];
   $sql = "select * from orders where userid='$userid' AND statusord='3'";
   $qry = mysqli_query($con, $sql);

   if (mysqli_num_rows($qry) > 0) {
      ?>

      <table>
         <h3>taken orders:</h3>
         <thead>
            <tr>
               <th>orderno</th>
               <th>Desc</th>
               <th>Date To Be Delivered</th>
               <th>Phone</th>
               <th>Weight</th>
               <th>Cost</th>
               <th>drivername</th>
               <th>source</th>
               <th>Dest</th>
               <th>Area</th>

               <th>check if rec</th>
            </tr>

         </thead>

         <tbody>
            <?php


            foreach ($qry as $qry) {
               $did = $qry['driverfk'];
               $rid = $qry['regionfk'];
               $rtid = $qry['region2fk'];
               echo "<tr><td>" . $qry['orderid'] . "</td>
				<td>" . $qry['description'] . "</td>
                 <td>" . $qry['dtbd'] . "</td>
                 <td>" . $qry['phone'] . "</td>	
				<td>" . $qry['weight'] . "</td>
				<td>" . $qry['cost'] . "$</td>";
               echo "<td>";
               echo drivername($did);
               echo "</td>";
               echo "<td>";
               echo regionname($rid);
               echo "</td>";
               echo "<td>";
               echo regionname($rtid);
               echo "</td>";
               echo "<td>" . $qry['orderarea'] . "</td>";
               echo "<td><a href='changestatusorder.php? id=" . $qry['orderid'] . "'>recieved</a></td></tr>";
            }

   }


   ?>
      </tbody>
   </table>
   <?php
   include('conn.php');
   $name = $_SESSION['login'];
   $sql = "select * from orders where userid='$userid' AND statusord='4'";
   $qry = mysqli_query($con, $sql);
   if (mysqli_num_rows($qry) > 0) {
      ?>
      <h4>recieved Orders:</h4>
      <table>

         <thead>
            <tr>
               <th>orderno</th>
               <th>Desc</th>
               <th>Date To Be Delivered</th>
               <th>Phone</th>
               <th>Weight</th>
               <th>Cost</th>
               <th> dname </th>
               <th>source</th>
               <th>destination</th>
               <th>Area</th>
            </tr>

         </thead>

         <tbody>"
            <?php

            foreach ($qry as $qry) {
               $did = $qry['driverfk'];
               $rid = $qry['region'];
               $rtid = $qry['region2'];
               echo "<tr><td>" . $qry['id'] . "</td>
				<td>" . $qry['descriptio'] . "</td>
                 <td>" . $qry['dat'] . "</td>
                 <td>" . $qry['phone'] . "</td>	
				<td>" . $qry['weigh'] . "</td>
				<td>" . $qry['cost'] . "$</td>";
               echo "<td>";
               echo drivername($did);
               echo "</td>";
               echo "<td>";
               echo regionname($rid);
               echo "</td>";
               echo "<td>";
               echo regionname($rtid);
               echo "</td>";
               echo "<td>" . $qry['orderarea'] . "</td>";

            }

   }


   ?>
      </tbody>
   </table>




</body>

</html>