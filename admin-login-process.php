<?php
    require("config.php");
    if(isset($_POST['admin-login'])){
        $username=$_POST['username'];
        $password=$_POST['password'];
// echo($username);
        $query="select * from `admin_registration` where (username='$username' AND password='$password');";  
        $result=mysqli_query($con,$query);
        if(mysqli_num_rows($result)==1){
            session_start();
            $row = mysqli_fetch_assoc($result);
            $_SESSION['Id']=$row['id'];
            $_SESSION['UserId']=$row['username'];
            $_SESSION['FullName']=$row['fname'];
            $_SESSION['Email']=$row['email'];
            $_SESSION['PhNum']=$row['num'];
            // echo($_SESSION['Image']);
            header("location:admin-main-page.php");
        }
        else{
            echo "<script>alert('Incorrect Credentials');</script>";
            header("location:admin-page.php");
        }

    }
?>