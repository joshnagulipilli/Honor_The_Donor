<?php
 require("config.php");
 if(isset($_POST['feedback']))
 {
    $name=$_POST['name'];
    $rating=$_POST['rating'];
    $msg=$_POST['msg'];
    $q="INSERT INTO `feedback`(`name`, `rating`, `msg`) VALUES ('$name','$rating','$msg')";
    $q_result=mysqli_query($con,$q);
    if($q_result){
        header("location:feedback.php");
    }
    else{
        echo '<script>alert("Feedback Not Submitted");</script>';
    }
 }
?>