<!DOCTYPE html>
<?php
    require("config.php");
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient-signup</title>
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
        <div class="donorblood-form">
            <!-- <h1>DONOR SIGNUP </h1> -->
            <form action="patient-signup.php" method="post">
                <div class="form-row">
                    <div class="form-col col-lg-6 col-12 " >
                       <h6>FullName:</h6>
                       <input type="text" name="fname">
                    </div>
                    <div class="form-col col-lg-6 col-12 " >
                        <h6>UserName:</h6>
                        <input type="text" name="username">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-col col-lg-6 col-12 " >
                        <h6>Email:</h6>
                        <input type="email" name="email">
                    </div>
                    <div class="form-col col-lg-6 col-12 " >
                        <h6>Mobile Number:</h6>
                        <input type="text" name="ph-num">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-col col-lg-6 col-12 " >
                        <h6>Password:</h6>
                        <input type="password" name="password">
                    </div>
                    <div class="form-col col-lg-6 col-12 " >
                        <h6>Confirm Password:</h6>
                        <input type="password" name="c-password"> 
                    </div>
                </div>
                <div class="form-row">
                    <input type="submit" name="patient-signup" class="btn btn-primary" style="background-color: red ; border:2px solid red ;width: 150px; box-shadow:0 0 10px black; " value="Sign Up">
                </div>
            </form>
        </div>
    </div>
    
</body>
</html>


<?php
    if(isset($_POST['patient-signup'])){
        // echo'<script>alert("Passwords not matched")</script>';
        $fname=$_POST['fname'];
        $username=$_POST['username'];
        $email=$_POST['email'];
        $num=$_POST['ph-num'];
        $password=$_POST['password'];
        $check=$_POST['c-password'];
        if($password!=$check){
            echo'<script>alert("Passwords not matched")</script>';
        }
        else{
            $sql="select * from `patient_registration` where (username='$username' or email= '$email');";
            $res=mysqli_query($con,$sql);
            if(mysqli_num_rows($res) > 0){
                $row = mysqli_fetch_assoc($res);
                if($username==$row['username']){
                    echo"<script>alert('Username Already Exits');</script>";
                }
                if($email==$row['email']){
                    echo"<script>alert('Email Already Exits');</script>";
                }
            }
            else{
                // echo"<script>alert('Registered entered');</script>";
                // $options= array("cost"=>4);
                // $password= password_hash($password,PASSWORD_BCRYPT,$options);
                $query= "INSERT INTO `patient_registration`( `fullname`, `username`, `email`, `num`, `password`) VALUES ('$fname','$username','$email','$num','$password')";
                if(mysqli_query($con,$query)){
                    // echo"<script>alert('Registered successfully');</script>";
                    header("location:patient-login.php");
                }
                else{
                    echo"<script>alert('Registered not successfully');</script>";
                }
            }

        }


    }
?>