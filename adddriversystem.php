<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
    <link rel="icon" href="https://cdn-icons-png.flaticon.com/512/1048/1048329.png" type="image/x-icom">
    <title>register</title>
</head>
<style>
    .background-image {
        margin: 0;
        padding: 0;
        background-image: url("orderback.jpg");
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

        .button {
            height: 150 px;
            position: relative;
            padding: 10px 20px;
            background-color: #2a2a2a;
            color: white;
            font-weight: bold;
            border: none;
            margin: 0 auto;
            width: 100%;
            cursor: pointer;

            border-radius: 4px;



        }

        .button:hover {
            background-color: #999191;
        }

        input {
            width: 100%;
            padding: 5px;
            margin: 2px;

        }
</style>

<body class="background-image">
    <FORM class="Rform" ACTION="adddriversystemformula.php" METHOD=post>
        <h1>Add Driver To System</h1>

        <br><br><br>
        <div><label for="fullname">Driver Name:</label><br>
            <input name="fullname" type="text" size"30" required></input><br>
        </div>
        <div>
            <form>
                <select>
                    <option>driver name </option>
                    <?php
                    include('conn.php');
                    $result = mysqli_query($con, "SELECT dname FROM driver where statusfk='1'")
                        or die("Could not find the table");
                    $newarray[] = $row;
                    while ($row = mysqli_fetch_assoc($result)) {
                        $newarray['dname'] = $row;
                    }
                    foreach ($newarray as $array) {
                        echo "<option >";
                        echo $array['dname'];
                        echo "</option>";
                    }
                    ?>
                </select>
            </form>
        </div>
        <br>
        <div><input class="button" type="submit" value="addtosystem"></input><br>
            <button class="button" onclick="window.location.href = 'adminpage.php';"> Back Home </button>
        </div>
    </form>
</body>

</html>