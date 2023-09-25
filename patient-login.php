<!DOCTYPE html>
<?php
    require("config.php");
    
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>patient-login</title>
    <link rel="stylesheet" href="style.css?">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
        crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <!-- fontawesome  -->
    <script src="https://kit.fontawesome.com/d1eb574a3d.js" crossorigin="anonymous"></script>
</head>
<body>
    <!-- navbar starting -->
    <div id="navbar-div">

    </div>
    <script>
        $(function () {
            $("#navbar-div").load("navbar4.php");
        })
    </script>
    <!-- navbar ending -->
    <div class="mainblood-form">
        <div class="donorblood-form" style="height:250px ;padding-top:50px;">
            <!-- <h1>DONOR SIGNUP </h1> -->
            <form action="patient-login-process.php" method="post">
                <div class="form-row">
                    <div class="form-col col-lg-6 col-12 " >
                       <h6>UserName:</h6>
                       <input type="text" name="username">
                    </div>
                    <div class="form-col col-lg-6 col-12 " >
                        <h6>Password:</h6>
                        <input type="password" name="password">
                    </div>
                </div>
                 <div class="form-row">
                    <input type="submit" name="patient-login" class="btn btn-primary" style="background-color: red ; border:2px solid red ;width: 150px; box-shadow:0 0 10px black; " value="Login">
                </div>
            </form>
        </div>
    </div>
    
</body>
</html>