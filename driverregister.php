<html>

<head>

    <title>SIGN UP Driver</title>


    <title>Deriver Register</title>
    <link rel="icon" href="https://cdn-icons-png.flaticon.com/512/1048/1048329.png" type="image/x-icom">
    <style>
        #form {
            color: white;

            font-weight: bold;
            border-radius: 10px;
            text-align: left;

            background-color: rgb(1 10 26 / 64%);
            padding: 30px;

        }

        .Rform {

            color: yellow;
            position: absolute;
            font-weight: bold;
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

            padding: 5px;
            margin: 2px;

        }

        .name {
            margin: 2px 0 2px 0;
        }

        .radio {
            display: flex;
            justify-content: space-around;
            margin: 5px;

        }

        .x {
            width: 100%;
        }

        #main {
            display: flex;
            flex-direction: row;
            justify-content: center;
            padding: 30px;
        }

        #image {

            height: 550px;
            width: 500px;
        }

        body {
            margin: 0px;
            background-color: #999191;
        }

        span {
            color: #ec9a3c;
        }
    </style>
</head>

<body>

    <body>
        <div id="main">
            <div id="form">
                <form method="POST" action="driversfunction.php">
                    <h1>Enter Driver Info </h1>

                    <div><label for="driverName">Driver Name:</label><br>
                        <input class="x" type="text" id="fname" name="fname" required></input><br>
                    </div>

                    <div> <label for="password">Password:</label><br>
                        <input class="x" type="password" id="password" name="password" required></input><br>
                    </div>
                    <div><label for="email">Email Address:</label><br>
                        <input class="x" type="email" id="email" name="email" required></input>
                    </div><br>
                    <div class="radio">
                        <label><input type="radio" name="opttype" value="Car">Car</input></label>
                        <label><input type="radio" name="opttype" value="Motorcycle">Motorcycle</input></label>
                    </div>

                    <div> <label for="dob">Date Of Birth:</label><br>
                        <input class="x" type="date" id="dob" name="dob" required></input><br>
                    </div>

                    <div><label for="phone"> Phone Number:</label><br>
                        <input class="x" type="number" id="phone" name="phone" placeholder="76-455678"
                            pattern="[0-9]{2}-[0-9]{6}" required></input><br>
                    </div>

                    <div class="radio">
                        <label><input type="radio" name="optradio" value="male" required>Male</input></label>
                        <label><input type="radio" name="optradio" value="female">Female</input></label>
                    </div>

                    <center><button id="submit" name="submit" type="submit">Add Driver</button>
                </form>
                <div>
                    <h1>Dellve<span>roo</span></h1>
                </div>
                </center>
            </div>
            <div id="image">
                <img src="images/Messenger-bro.svg" alt="">
            </div>
        </div>
        <script>
            document.getElementById("submit").addEventListener("click", function () {
                var age = document.getElementById("dob").value;
                var userage = new Date(age).getFullYear();
                console.log("age =", userage);
                var date = 2005;
                console.log("year entered", date)
                if (userage - date >= 18) {
                    window.alert("You Most be greater the 18");
                    console.log("your age in less than 18")

                }
            })

        </script>
    </body>

</html>