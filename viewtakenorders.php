<html>

<head>

  <title>View reservations</title>
  <link rel="icon" href="https://cdn-icons-png.flaticon.com/512/1048/1048329.png" type="image/x-icom">
</head>

<body>



  <form method="GET" action="">

    <h1>Driver Name </h1>

    <div><label for="dname">Driver Name:</label><br>
      <input type="text" id="fname" name="dname" value="<?php if (isset($_GET['dname'])) {
        echo $_GET['dname'];
      } ?>"
        placeholder="samer jabaq" required></input>
    </div></br>
    <div><button name="submit" type="submit">Check Order</button></div><br>
    <a href='driverpage.php'>Back Home</a>
  </form>

  <?php
  include('conn.php');
  if (isset($_GET['dname'])) {
    $dname = $_GET['dname'];
    $sql = "select * from takeorder where dname='$dname'";
    $qry = mysqli_query($con, $sql);
    if (mysqli_num_rows($qry) > 0) {
      ?>

      <table border=4px solid>
        <thead>
          <tr>
            <th>Client Name</th>
            <th>Description</th>
            <th>From Region</th>
            <th>To Region</th>
            <th>Specific Area</th>
            <th>Date to be delivered</th>
            <th>Phone</th>
            <th>Email</th>
            <th>Weight</th>
            <th> LOCATION </th>
            <th>Driver Name</th>
            <th> Delivery Cost </th>

          </tr>
        </thead>

        <tbody>
          <?php


          foreach ($qry as $sqll) {
            echo "<tr><td>" . $sqll['clientname'] . "</td>
                 <td>" . $sqll['description'] . "</td>
                 <td>" . $sqll['region'] . "</td>
                 <td>" . $sqll['region2'] . "</td>
                 <td>" . $sqll['area'] . "</td>
                 <td>" . $sqll['date'] . "</td>
                 <td>" . $sqll['phone'] . "</td>
                 <td>" . $sqll['email'] . "</td>
                 <td>" . $sqll['weight'] . "</td>
                 <td>" . $sqll['Latitude'] .
              $sqll['Longitude'] . "</td>
                 <td>" . $sqll['dname'] . "</td>
                 <td>" . $sqll['cost'] . "</td>
                
              </tr>";
          }

    }

  }

  ?>
    </tbody>
  </table>






  </table>
</body>

</html>