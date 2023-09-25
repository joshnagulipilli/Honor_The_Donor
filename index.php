<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HONOR THE DONOR</title>
    
    <link href="style.css?<?=filemtime("style.css")?>" rel="stylesheet" type="text/css"/>
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
            $("#navbar-div").load("navbar.php");
        })
    </script>
    <!-- navbar ending -->
    
    <div id="videoDiv2" class="home" style="background-color:white;" >
        <video id="video2" preload="" autoplay="" muted="" playsinline="" loop="">
            <!-- <source src="video/t12.webm" type="video/webm"> -->
            <source src="home-bg2-video.mp4" type="video/mp4">
        </video> 

        <div class="home-content">
            <div class="rrow">
                <div class="donor-icon" >
                    <a href="donor-main-page.php">
                        <img src="donor-icon.jpg" alt="">
                    </a>
                </div>
                <h4
                    style="font-family:Georgia, 'Times New Roman', Times, serif ; text-shadow: 0 0 10px rgb(23, 23, 23); color: rgb(252, 248, 248);">


                    DONOR
                </h4>
            </div>
            <div class="rrow">
                <div class="admin-icon">
                    <a href="admin-page.php">
                        <img src="admin-icon.png" alt="">
                    </a>
                </div>
                <h4
                    style="font-family:Georgia, 'Times New Roman', Times, serif ;   text-shadow: 0 0 10px rgb(23, 23, 23); color: rgb(255, 255, 255);">
                    ADMIN
                </h4>
            </div>
            <div class="rrow">
                <div class="patient-icon">
                    <a href="patient-main-page.php">
                        <img src="patient-icon.jpg" alt="">
                    </a>
                </div>
                <h4
                    style="font-family:Georgia, 'Times New Roman', Times, serif ;  text-shadow: 0 0 10px rgb(23, 23, 23); color: rgb(255, 255, 255);">
                    PATIENT
                </h4>
            </div>
        </div>

    </div>
    <div id="info">
        <center><h3 style="margin-top:60px;margin-bottom:-40px">Information About Blood Groups</h3></center>
        <div class="info-main">
            <img src="info.png" alt="">
        </div>
    </div>
</body>

</html>