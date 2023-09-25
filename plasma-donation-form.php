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
    <title>Blood Donation Form</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Dancing+Script:wght@500&family=Rubik+Glitch&display=swap" rel="stylesheet">
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
    <div class="bd-content">
        <h2 style="display: flex; align-items: center; justify-content: center; margin-top:20px">Plasma Donation Form</h2>
        <div class="bd-formdiv">
            
            <form action="plasma-donation-form.php" method="post" enctype="multipart/form-data"  style="padding-top:50px ; padding-bottom: 50px;">
                <div class="bd-form-row">
                    <div class="bd-form-col col-lg-6">
                        <h6>Age:</h6>
                        <input type="number" name="age" min="18" max="60">
                    </div>
                    <div class="bd-form-col col-lg-6">
                        <h6>Unit in (ml):</h6>
                        <input type="text" name="units">
                    </div>
                </div>
                <div class="bd-form-row">
                    <div class="bd-form-col col-lg-6">
                        <h6>Blood Group:</h6>
                        <select name="blood-group"   id="" style="position: relative;width: 90%; padding:0 10px; padding-right: 10px;  margin: 0 5%;height: 50%;"> 
                            <option value="" selected disabled>-</option>
                            <option value="AB+">AB+</option>
                            <option value="AB-">AB-</option>
                        </select>
                    </div>
                    <div class="bd-form-col col-lg-6">
                        <h6>Contact Number:</h6>
                        <input type="text" name="number">
                    </div>
                </div>
                <div class="bd-form-row">
                    <div class="bd-form-col col-lg-6">
                        <h6>Recent Donation:</h6>
                        <select name="recent-blood"   id="" style="position: relative;width: 90%; padding:0 10px; padding-right: 10px;  margin: 0 5%;height: 50%;"> 
                            <option value="" selected disabled>-</option>
                            <option value="!st time">1st Time</option>
                            <option value="Less than 28 days">Less Than 28 Days</option>
                            <option value="More than 28 days">More Than 28 Days</option>
                            
                        </select>
                    </div>
                    <div class="bd-form-col col-lg-6">
                        <h6>Weight in (kgs):</h6>
                        <input type="number"name="weights" min="50">
                    </div>
                </div>
                <div class="bd-form-row">
                    <div class="bd-form-col col-lg-12">
                        <h6>Address:</h6>
                        <textarea name="address" id="" cols="30" rows="30" style="position: relative;width: 96%; padding:0 10px; padding-right: 10px; margin-left:2.2%;height: 90%;"></textarea>
                    </div>
                    
                </div>
                <br>

                <div class="bd-form-row">
                    <div class="bd-form-col col-lg-6" >
                        <h6>Reports:</h6>
                        <input type="file" name="reports">
                    </div>
                    <div class="bd-form-col col-lg-6" >
                        <button type="submit" name="donate-plasma" class="btn btn-primary" style="background-color: red ; border:2px solid red ;width: 100px; box-shadow:0 0 10px black; margin-top:25px; margin-left:220px;">SUBMIT</button>
                    </div>
                </div>
                
            </form>
        </div>
    </div>
</body>
</html>



<?php
    session_start();
    if(isset($_POST['donate-plasma'])){
        // echo"<script>alert('hello')</script>";
        $age=$_POST['age'];
        $units=$_POST['units'];
        $group=$_POST['blood-group'];
        $number=$_POST['number'];
        $recent=$_POST['recent-blood'];
        $weight=$_POST['weights'];
        $address=$_POST['address'];
        $files=$_FILES['reports'];
        $username= $_SESSION['UserId'];
        $filename=$files['name'];
        $error=$files['error'];
        $tmp=$files['tmp_name'];
        $destination= 'reports/'.$filename;
        move_uploaded_file($tmp,$destination);
        $query= "insert into `plasma-donation-form` (username,age,units,bloodgrp,number,recent,weight,address,reports) values ('$username','$age','$units','$group','$number','$recent','$weight','$address','$destination')";
        if(mysqli_query($con,$query)){
            echo "<script>alert('Request Raised');</script>";
        }
        else{
            echo "<script>alert('Not    uploaded');</script>";
        }
    }
?>