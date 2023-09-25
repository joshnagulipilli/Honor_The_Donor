<?php
    $con=mysqli_connect('localhost','root','','blood_donation');
    if(!$con){
        echo'<script>alert("Not connected")</script>';
    }
?>