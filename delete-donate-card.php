<?php
 require("config.php");
 if(isset($_POST['delete-blood']))
 {
    $id=$_POST['timesss'];
    // echo $date;
    $query = "DELETE FROM `blood-donation-form` WHERE id='$id'";
    $query_run = mysqli_query($con,$query);
    if($query_run)
    {
        header("location:donor-requests-cards.php");
    }
    else{
        echo '<script>alert("data not deleted");</script>';
    }
}
?>