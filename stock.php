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
    <title>Donor Requests</title>
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
    <div class="stock-main">
        <center><h3 style ="margin-top:10px">Available Stocks</h3></center>
        <div class="t-stocks">
            <div class="stocks">
                <h4>Available Blood <i style="color:red" class="fa-solid fa-droplet"></i> : 
                <?php
                    $q= "SELECT * FROM `blood-donation-approved`";
                    $q_result=mysqli_query($con,$q);
                    if($q_result){
                        $p=0;
                        while($row=mysqli_fetch_array($q_result)){
                            $p=$p+($row['units']);
                        }
                        echo "$p Lts";
                    }
                    else{
                        echo "No Blood Available";
                    }
                ?>
            
            </h4>
            </div>
            <div class="stocks">
                <h4>Available Plasma <i class="fa-solid fa-droplet"></i> : 
                <?php
                    $q= "SELECT * FROM `plasma-donation-approved`";
                    $q_result=mysqli_query($con,$q);
                    if($q_result){
                        $p=0;
                        while($row=mysqli_fetch_array($q_result)){
                            $p=$p+($row['units']);
                        }
                        echo "$p Lts";
                    }
                    else{
                        echo "No Plasma Available";
                    }
                ?>
                </h4>
            </div>
            <div class="stocks">
                <h4>Available Platelets <i class="fa-solid fa-droplet"></i> : 
                <?php
                    $q= "SELECT * FROM `platelets-donation-approved`";
                    $q_result=mysqli_query($con,$q);
                    if($q_result){
                        $p=0;
                        while($row=mysqli_fetch_array($q_result)){
                            $p=$p+($row['units']);
                        }
                        echo "$p Lts";
                    }
                    else{
                        echo "No Platelets Available";
                    }
                ?>
                </h4>
            </div>
        </div>
        <hr>
        <div class="each-stock">
            <center><h4 style ="margin-top:20px;margin-bottom:-10px">Blood Groups</h4></center>
            <div class="blood-stock">
                <div class="blood-grp">
                    <h3>O+ : 
                        <?php
                            $q= "SELECT * FROM `blood-donation-approved` WHERE bloodgrp='O+'";
                            $q_result=mysqli_query($con,$q);
                            if($q_result){
                                $p=0;
                                while($row=mysqli_fetch_array($q_result)){
                                    $p=$p+($row['units']);
                                }
                                echo "$p Lts";
                            }
                            else{
                                echo "0";
                            }
                        ?>
                    </h3>
                </div>
                <div class="blood-grp">
                    <h3>O- : 
                    <?php
                            $q= "SELECT * FROM `blood-donation-approved` WHERE bloodgrp='O-'";
                            $q_result=mysqli_query($con,$q);
                            if($q_result){
                                $p=0;
                                while($row=mysqli_fetch_array($q_result)){
                                    $p=$p+($row['units']);
                                }
                                echo "$p Lts";
                            }
                            else{
                                echo "0";
                            }
                        ?>
                    </h3>
                </div>
                <div class="blood-grp">
                    <h3>A+ : 
                    <?php
                            $q= "SELECT * FROM `blood-donation-approved` WHERE bloodgrp='A+'";
                            $q_result=mysqli_query($con,$q);
                            if($q_result){
                                $p=0;
                                while($row=mysqli_fetch_array($q_result)){
                                    $p=$p+($row['units']);
                                }
                                echo "$p Lts";
                            }
                            else{
                                echo "0";
                            }
                        ?>
                    </h3>
                </div>
                <div class="blood-grp">
                    <h3>A- : 
                    <?php
                            $q= "SELECT * FROM `blood-donation-approved` WHERE bloodgrp='A-'";
                            $q_result=mysqli_query($con,$q);
                            if($q_result){
                                $p=0;
                                while($row=mysqli_fetch_array($q_result)){
                                    $p=$p+($row['units']);
                                }
                                echo "$p Lts";
                            }
                            else{
                                echo "0";
                            }
                        ?>
                    </h3>
                </div>
                <div class="blood-grp">
                    <h3>B+ :
                    <?php
                            $q= "SELECT * FROM `blood-donation-approved` WHERE bloodgrp='B+'";
                            $q_result=mysqli_query($con,$q);
                            if($q_result){
                                $p=0;
                                while($row=mysqli_fetch_array($q_result)){
                                    $p=$p+($row['units']);
                                }
                                echo "$p Lts";
                            }
                            else{
                                echo "0";
                            }
                        ?>
                    </h3>
                </div>
                <div class="blood-grp">
                    <h3>B- : 
                    <?php
                            $q= "SELECT * FROM `blood-donation-approved` WHERE bloodgrp='B-'";
                            $q_result=mysqli_query($con,$q);
                            if($q_result){
                                $p=0;
                                while($row=mysqli_fetch_array($q_result)){
                                    $p=$p+($row['units']);
                                }
                                echo "$p Lts";
                            }
                            else{
                                echo "0";
                            }
                        ?>
                    </h3>
                </div>
                <div class="blood-grp">
                    <h3>AB+ : <?php
                            $q= "SELECT * FROM `blood-donation-approved` WHERE bloodgrp='AB+'";
                            $q_result=mysqli_query($con,$q);
                            if($q_result){
                                $p=0;
                                while($row=mysqli_fetch_array($q_result)){
                                    $p=$p+($row['units']);
                                }
                                echo "$p Lts";
                            }
                            else{
                                echo "0";
                            }
                        ?></h3>
                </div>
                <div class="blood-grp">
                    <h3>AB- :
                         <?php
                            $q= "SELECT * FROM `blood-donation-approved` WHERE bloodgrp='AB-'";
                            $q_result=mysqli_query($con,$q);
                            if($q_result){
                                $p=0;
                                while($row=mysqli_fetch_array($q_result)){
                                    $p=$p+($row['units']);
                                }
                                echo "$p Lts";
                            }
                            else{
                                echo "0";
                            }
                        ?></h3>
                </div>
            </div>
        </div>
        <hr>
        <div class="each-stock">
            <center><h4 style ="margin-top:20px;margin-bottom:-10px">Plasma Groups</h4></center>
            <div class="blood-stock">
                <div class="blood-grp">
                    <h3>AB+ : 
                        <?php
                            $q= "SELECT * FROM `plasma-donation-approved` WHERE bloodgrp='AB+'";
                            $q_result=mysqli_query($con,$q);
                            if($q_result){
                                $p=0;
                                while($row=mysqli_fetch_array($q_result)){
                                    $p=$p+($row['units']);
                                }
                                echo "$p Lts";
                            }
                            else{
                                echo "0";
                            }
                        ?>
                    </h3>
                </div>
                <div class="blood-grp">
                    <h3>AB- : 
                    <?php
                            $q= "SELECT * FROM `plasma-donation-approved` WHERE bloodgrp='AB-'";
                            $q_result=mysqli_query($con,$q);
                            if($q_result){
                                $p=0;
                                while($row=mysqli_fetch_array($q_result)){
                                    $p=$p+($row['units']);
                                }
                                echo "$p Lts";
                            }
                            else{
                                echo "0";
                            }
                        ?>
                    </h3>
                </div>
            </div>
        </div>
        <hr>
        <div class="each-stock">
            <center><h4 style ="margin-top:20px;margin-bottom:-10px">Platelets Groups</h4></center>
            <div class="blood-stock">
            <div class="blood-grp">
                    <h3>O+ :
                    <?php
                            $q= "SELECT * FROM `platelets-donation-approved` WHERE bloodgrp='O+'";
                            $q_result=mysqli_query($con,$q);
                            if($q_result){
                                $p=0;
                                while($row=mysqli_fetch_array($q_result)){
                                    $p=$p+($row['units']);
                                }
                                echo "$p Lts";
                            }
                            else{
                                echo "0";
                            }
                        ?>
                    </h3>
                </div>
                <div class="blood-grp">
                    <h3>A+ : 
                    <?php
                            $q= "SELECT * FROM `platelets-donation-approved` WHERE bloodgrp='A+'";
                            $q_result=mysqli_query($con,$q);
                            if($q_result){
                                $p=0;
                                while($row=mysqli_fetch_array($q_result)){
                                    $p=$p+($row['units']);
                                }
                                echo "$p Lts";
                            }
                            else{
                                echo "0";
                            }
                        ?>
                    </h3>
                </div>
                <div class="blood-grp">
                    <h3>A- : 
                    <?php
                            $q= "SELECT * FROM `platelets-donation-approved` WHERE bloodgrp='A-'";
                            $q_result=mysqli_query($con,$q);
                            if($q_result){
                                $p=0;
                                while($row=mysqli_fetch_array($q_result)){
                                    $p=$p+($row['units']);
                                }
                                echo "$p Lts";
                            }
                            else{
                                echo "0";
                            }
                        ?>
                    </h3>
                </div>
                <div class="blood-grp">
                    <h3>B+ : 
                    <?php
                            $q= "SELECT * FROM `platelets-donation-approved` WHERE bloodgrp='B+'";
                            $q_result=mysqli_query($con,$q);
                            if($q_result){
                                $p=0;
                                while($row=mysqli_fetch_array($q_result)){
                                    $p=$p+($row['units']);
                                }
                                echo "$p Lts";
                            }
                            else{
                                echo "0";
                            }
                        ?>
                    </h3>
                </div>
                <div class="blood-grp">
                    <h3>AB+ :
                    <?php
                            $q= "SELECT * FROM `platelets-donation-approved` WHERE bloodgrp='AB+'";
                            $q_result=mysqli_query($con,$q);
                            if($q_result){
                                $p=0;
                                while($row=mysqli_fetch_array($q_result)){
                                    $p=$p+($row['units']);
                                }
                                echo "$p Lts";
                            }
                            else{
                                echo "0";
                            }
                        ?>
                    </h3>
                </div>
                <div class="blood-grp">
                    <h3>AB- : 
                    <?php
                            $q= "SELECT * FROM `platelets-donation-approved` WHERE bloodgrp='AB-'";
                            $q_result=mysqli_query($con,$q);
                            if($q_result){
                                $p=0;
                                while($row=mysqli_fetch_array($q_result)){
                                    $p=$p+($row['units']);
                                }
                                echo "$p Lts";
                            }
                            else{
                                echo "0";
                            }
                        ?>
                    </h3>
                </div>
            </div>
        </div>
    </div>
</body>
</html>