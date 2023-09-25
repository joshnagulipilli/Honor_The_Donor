<!DOCTYPE html>
<?php
    require("config.php");
    session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Feedback Form</title>
    <!-- my css  -->
    <link href="style.css?<?=filemtime("style.css")?>" rel="stylesheet" type="text/css"/>
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
    <div class="feedback-main">
        <center><h3 style="margin-top:60px;margin-bottom:-40px">FeedBack Form</h3></center>
        <div class="feedback-div">
            <form action="feedback-upload.php" method="post">
            <div class="fd-row">
                <div class="fd-col">
                    <h3>Name :</h3>
                    <input type="text" name="name">
                </div>
                <div class="fd-col">
                    <h3>Rating :</h3>
                    <input type="number" name="rating" min="1" max="5">
                </div>
            </div>
            <div class="fd-row" style="height:160px">
                <div style="width:100%;"class="fd-col">
                    <h3>Message :</h3>
                    <textarea name="msg" id="" cols="30" rows="10"></textarea>
                </div>
            </div>
            <center><input type="submit" style="margin-top:10px;background-color:red; border:1px solid red" name="feedback" value="SUBMIT" class="btn btn-primary"></center>
            </form>
        </div>
    </div>
</body>
</html>