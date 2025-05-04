<?php

session_start();


if ($_POST["pass"] == $_POST["repass"]) {
    $servername = "localhost";
    $username = "root";
    $conn = mysqli_connect($servername, $username, "", "delivery") or die(mysql_error());
    $sql = " Insert into user (username,pass,email,usertype,regionfk) values ('$_POST[fullname]','$_POST[pass]','$_POST[email]','$_POST[type]','$_POST[region]')";
    $result = mysqli_query($conn, $sql) or die(mysql_error());
    print "<h1>Thank you for your registration you can sign in now</h1>";
    print "<a href='home.php'>Home Page</a>";
    echo "<br>";
    print "<a href='usersignin.php'>Go to Signin</a>";
} else
    print "Passwords Doesnt Match";

?>