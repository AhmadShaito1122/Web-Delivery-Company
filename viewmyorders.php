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

$sql = mysqli_query($con, "SELECT * FROM driver WHERE dname='$name'")
   or die("Could not find the table");
while ($qry = mysqli_fetch_array($sql)) {
   $driverid = $qry['driverno'];

}
?>
<?php
function drivername($d)
{
   include('conn.php');
   $res = mysqli_query($con, "SELECT username FROM user WHERE id = '$d'");
   $row = mysqli_fetch_row($res);
   echo "$row[0]";
}
?>
<?php
function statusname($s)
{
   include('conn.php');
   $ress = mysqli_query($con, "SELECT statusname FROM status WHERE statusid = '$s'");
   $row = mysqli_fetch_row($ress);
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
         margin: 0;
         padding: 0;
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
   <h1>username </h1>
   <?php
   include('conn.php');

   $dname = $_SESSION['login'];
   print "$dname";

   $sql = "select * from orders where driverfk='$driverid'";
   $qry = mysqli_query($con, $sql);
   if (mysqli_num_rows($qry) > 0) {
      ?>
      </h1>
      </br>
      <table>

         <h1>view Delivery Orders:</h1>
         <thead>
            <tr>
               <th>orderid</th>
               <th>description></th>
               <th>Area</th>
               <th>Date To Be Delivered</th>
               <th>Phone</th>
               <th> Delivery Cost </th>
               <th>clientname</th>
               <th>source </th>
               <th>destination</th>
               <th>status></th>
            </tr>
         </thead>

         <tbody>
            <?php

            foreach ($qry as $qry) {
               $did = $qry['userfk'];
               $rid = $qry['regionfk'];
               $rtid = $qry['region2fk'];
               $sid = $qry['statusfk'];
               echo "
                 <td>" . $qry['orderid'] . "</td>
                 <td>" . $qry['description'] . "</td>
                 <td>" . $qry['orderarea'] . "</td>
                 <td>" . $qry['dtbd'] . "</td>
                 <td>" . $qry['phone'] . "</td>
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
               echo "<td>";
               echo statusname($sid);
               echo "</td></tr>";
            }

   }


   ?>

      </tbody>
   </table>
</body>

</html>