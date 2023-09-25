<?php
 require("config.php");
 if(isset($_POST['reject-plasma']))
 {
    $id=$_POST['timesss'];
    // echo $date;
    $sq="SELECT * FROM `plasma-request-form` where id='$id'";
    $sq_run= mysqli_query($con,$sq);
    $row = mysqli_fetch_array($sq_run);

    $username=$row['username'];
    $name=$row['name'];
    $age=$row['id'];
    $units=$row['units'];
    $group=$row['bloodgrp'];
    $number=$row['num'];
    $weight=$row['weight'];
    $address=$row['address'];
    $reports=$row['reports'];

    $iq="INSERT INTO `plasma-request-rejected`(`username`, `name`, `age`, `units`, `bloodgrp`, `number`, `weight`, `address`, `reports`) VALUES ('$username','$name','$age','$units','$group','$number','$weight','$address','$reports')";
    $iq_run= mysqli_query($con,$iq);

    $query = "DELETE FROM `plasma-request-form` WHERE id='$id'";
    $query_run = mysqli_query($con,$query);
    if($query_run)
    {
        echo '<script>alert("data Rejected");</script>';
        header("location:patient-profiles.php");
    }
    else{
        echo '<script>alert("data not deleted");</script>';
    }
}


else if(isset($_POST['approve-plasma'])){
    $id=$_POST['timesss'];
    // echo $date;
    $sq="SELECT * FROM `plasma-request-form` where id='$id'";
    $sq_run= mysqli_query($con,$sq);
    $row = mysqli_fetch_array($sq_run);

    $username=$row['username'];
    $name=$row['name'];
    $age=$row['id'];
    $units=$row['units'];
    $group=$row['bloodgrp'];
    $number=$row['num'];
    $weight=$row['weight'];
    $address=$row['address'];
    $reports=$row['reports'];

    $iq="INSERT INTO `plasma-request-approved`(`username`, `name`, `age`, `units`, `bloodgrp`, `number`, `weight`, `address`, `reports`) VALUES ('$username','$name','$age','$units','$group','$number','$weight','$address','$reports')";
    $iq_run= mysqli_query($con,$iq);

    $query = "DELETE FROM `plasma-request-form` WHERE id='$id'";
    $query_run = mysqli_query($con,$query);
    if($query_run)
    {
        echo '<script>alert("data Approved");</script>';
        header("location:patient-profiles.php");
    }
    else{
        echo '<script>alert("data not Approved");</script>';
    }
}
?>