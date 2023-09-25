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
    <div class="main-display-req">
        <center><h3 style="margin:10px 0px">Requests</h3></center>
        
            <center><h4 style="margin-top:10px;margin-bottom:-20px">Blood Requests</h4></center>
            <div class="display-req">
            <?php
                if(isset($_POST['click-here'])){
                    $username=$_POST['timesss'];
                    $query="SELECT * FROM `blood-donation-form` where username='$username'";
                    $query_run = mysqli_query($con,$query);
                    $check= mysqli_num_rows($query_run);
                    if($check){
                        while($row = mysqli_fetch_array($query_run))
                        {
                            ?>
                            <div class="req-card">
                                <h4 style="padding-left:1px">Username:</h4>
                                <h5 style="border:2px solid black; min-height:35px; border-radius:5px;padding-left:10px;padding-top:4px"><?php echo $row['username'];?></h5>

                                <h4 style="padding-left:1px">Age:</h4>
                                <h5 style="border:2px solid black; min-height:35px; border-radius:5px;padding-left:10px;padding-top:4px"><?php echo $row['age'];?></h5>

                                <h4 style="padding-left:1px">Units:</h4>
                                <h5 style="border:2px solid black; min-height:35px; border-radius:5px;padding-left:10px;padding-top:4px"><?php echo $row['units'];?></h5>

                                <h4 style="padding-left:1px">Blood Group:</h4>
                                <h5 style="border:2px solid black; min-height:35px; border-radius:5px;padding-left:10px;padding-top:4px"><?php echo $row['bloodgrp'];?></h5>

                                <h4 style="padding-left:1px">Username:</h4>
                                <h5 style="border:2px solid black; min-height:35px; border-radius:5px;padding-left:10px;padding-top:4px"><?php echo $row['username'];?></h5>

                                <h4 style="padding-left:1px">Number:</h4>
                                <h5 style="border:2px solid black; min-height:35px; border-radius:5px;padding-left:10px;padding-top:4px"><?php echo $row['number'];?></h5>

                                <h4 style="padding-left:1px">Recent Donation:</h4>
                                <h5 style="border:2px solid black; min-height:35px; border-radius:5px;padding-left:10px;padding-top:4px"><?php echo $row['recent'];?></h5>

                                <h4 style="padding-left:1px">Weight:</h4>
                                <h5 style="border:2px solid black; min-height:35px; border-radius:5px;padding-left:10px;padding-top:4px"><?php echo $row['weight'];?></h5>

                                <h4 style="padding-left:1px">Address:</h4>
                                <h5 style="border:2px solid black; min-height:35px; border-radius:5px;padding-left:10px;padding-top:4px"><?php echo $row['address'];?></h5>

                                <h4 style="padding-left:1px">Reports:</h4>
                                <h5 style="border:2px solid black; min-height:35px; border-radius:5px;padding-left:10px;padding-top:4px"><a style="font-size:15px; margin-left:5px; text-decoration:none" href="<?php echo $row['reports'];?>">Click Here </a></h5>

                                <form action="blood-d-ar.php" method="post" >
                                <input type="hidden" name='timesss' value="<?php echo $row['id'] ?>">
                                <input type="submit" name="reject-blood" value="DELETE" class="btn btn-primary" style="margin-top:10px;background-color:red ;color:white;border:1px solid red; margin-right:170px; width:100px;height:40px">
                                 <input  type="submit" name="approve-blood" value="APPROVE" class="btn btn-primary" style="margin-top:10px;background-color:red ;color:white;border:1px solid red; width:100px;height:40px">
                                </form>
                            </div>
                            <?php
                        }
                    }
                    else{
                        echo "No Blood Donation Requests";
                    }

                }
            ?>
            </div>


            <center><h4 style="margin-top:10px;margin-bottom:-20px">Plasma Requests</h4></center>
            <div class="display-req">
            <?php
                if(isset($_POST['click-here'])){
                    $username=$_POST['timesss'];
                    $query="SELECT * FROM `plasma-donation-form` where username='$username'";
                    $query_run = mysqli_query($con,$query);
                    $check= mysqli_num_rows($query_run);
                    if($check){
                        while($row = mysqli_fetch_array($query_run))
                        {
                            ?>
                            <div class="req-card">
                                <h4 style="padding-left:1px">Username:</h4>
                                <h5 style="border:2px solid black; min-height:35px; border-radius:5px;padding-left:10px;padding-top:4px"><?php echo $row['username'];?></h5>

                                <h4 style="padding-left:1px">Age:</h4>
                                <h5 style="border:2px solid black; min-height:35px; border-radius:5px;padding-left:10px;padding-top:4px"><?php echo $row['age'];?></h5>

                                <h4 style="padding-left:1px">Units:</h4>
                                <h5 style="border:2px solid black; min-height:35px; border-radius:5px;padding-left:10px;padding-top:4px"><?php echo $row['units'];?></h5>

                                <h4 style="padding-left:1px">Blood Group:</h4>
                                <h5 style="border:2px solid black; min-height:35px; border-radius:5px;padding-left:10px;padding-top:4px"><?php echo $row['bloodgrp'];?></h5>

                                <h4 style="padding-left:1px">Username:</h4>
                                <h5 style="border:2px solid black; min-height:35px; border-radius:5px;padding-left:10px;padding-top:4px"><?php echo $row['username'];?></h5>

                                <h4 style="padding-left:1px">Number:</h4>
                                <h5 style="border:2px solid black; min-height:35px; border-radius:5px;padding-left:10px;padding-top:4px"><?php echo $row['number'];?></h5>

                                <h4 style="padding-left:1px">Recent Donation:</h4>
                                <h5 style="border:2px solid black; min-height:35px; border-radius:5px;padding-left:10px;padding-top:4px"><?php echo $row['recent'];?></h5>

                                <h4 style="padding-left:1px">Weight:</h4>
                                <h5 style="border:2px solid black; min-height:35px; border-radius:5px;padding-left:10px;padding-top:4px"><?php echo $row['weight'];?></h5>

                                <h4 style="padding-left:1px">Address:</h4>
                                <h5 style="border:2px solid black; min-height:35px; border-radius:5px;padding-left:10px;padding-top:4px"><?php echo $row['address'];?></h5>

                                <h4 style="padding-left:1px">Reports:</h4>
                                <h5 style="border:2px solid black; min-height:35px; border-radius:5px;padding-left:10px;padding-top:4px"><a style="font-size:15px; margin-left:5px; text-decoration:none" href="<?php echo $row['reports'];?>">Click Here </a></h5>

                                <form action="plasma-d-ar.php" method="post" >
                                <input type="hidden" name='timesss' value="<?php echo $row['id'] ?>">
                                <input type="submit" name="reject-blood" value="DELETE" class="btn btn-primary" style="margin-top:10px;background-color:red ;color:white;border:1px solid red; margin-right:170px; width:100px;height:40px">
                                 <input  type="submit" name="approve-blood" value="APPROVE" class="btn btn-primary" style="margin-top:10px;background-color:red ;color:white;border:1px solid red; width:100px;height:40px">
                                </form>
                            </div>
                            <?php
                        }
                    }
                    else{
                        echo "No Plasma Donation Requests";
                    }

                }
            ?>
            </div>
            <center><h4 style="margin-top:10px;margin-bottom:-20px">Platelets Requests</h4></center>
            <div class="display-req">
            <?php
                if(isset($_POST['click-here'])){
                    $username=$_POST['timesss'];
                    $query="SELECT * FROM `platelets-donation-form` where username='$username'";
                    $query_run = mysqli_query($con,$query);
                    $check= mysqli_num_rows($query_run);
                    if($check){
                        while($row = mysqli_fetch_array($query_run))
                        {
                            ?>
                            <div class="req-card">
                                <h4 style="padding-left:1px">Username:</h4>
                                <h5 style="border:2px solid black; min-height:35px; border-radius:5px;padding-left:10px;padding-top:4px"><?php echo $row['username'];?></h5>

                                <h4 style="padding-left:1px">Age:</h4>
                                <h5 style="border:2px solid black; min-height:35px; border-radius:5px;padding-left:10px;padding-top:4px"><?php echo $row['age'];?></h5>

                                <h4 style="padding-left:1px">Units:</h4>
                                <h5 style="border:2px solid black; min-height:35px; border-radius:5px;padding-left:10px;padding-top:4px"><?php echo $row['units'];?></h5>

                                <h4 style="padding-left:1px">Blood Group:</h4>
                                <h5 style="border:2px solid black; min-height:35px; border-radius:5px;padding-left:10px;padding-top:4px"><?php echo $row['bloodgrp'];?></h5>

                                <h4 style="padding-left:1px">Username:</h4>
                                <h5 style="border:2px solid black; min-height:35px; border-radius:5px;padding-left:10px;padding-top:4px"><?php echo $row['username'];?></h5>

                                <h4 style="padding-left:1px">Number:</h4>
                                <h5 style="border:2px solid black; min-height:35px; border-radius:5px;padding-left:10px;padding-top:4px"><?php echo $row['number'];?></h5>

                                <h4 style="padding-left:1px">Recent Donation:</h4>
                                <h5 style="border:2px solid black; min-height:35px; border-radius:5px;padding-left:10px;padding-top:4px"><?php echo $row['recent'];?></h5>

                                <h4 style="padding-left:1px">Weight:</h4>
                                <h5 style="border:2px solid black; min-height:35px; border-radius:5px;padding-left:10px;padding-top:4px"><?php echo $row['weight'];?></h5>

                                <h4 style="padding-left:1px">Address:</h4>
                                <h5 style="border:2px solid black; min-height:35px; border-radius:5px;padding-left:10px;padding-top:4px"><?php echo $row['address'];?></h5>

                                <h4 style="padding-left:1px">Reports:</h4>
                                <h5 style="border:2px solid black; min-height:35px; border-radius:5px;padding-left:10px;padding-top:4px"><a style="font-size:15px; margin-left:5px; text-decoration:none" href="<?php echo $row['reports'];?>">Click Here </a></h5>

                                <form action="platelets-d-ar.php" method="post" >
                                <input type="hidden" name='timesss' value="<?php echo $row['id'] ?>">
                                <input type="submit" name="reject-blood" value="DELETE" class="btn btn-primary" style="margin-top:10px;background-color:red ;color:white;border:1px solid red; margin-right:170px; width:100px;height:40px">
                                 <input  type="submit" name="approve-blood" value="APPROVE" class="btn btn-primary" style="margin-top:10px;background-color:red ;color:white;border:1px solid red; width:100px;height:40px">
                                </form>
                            </div>
                            <?php
                        }
                    }
                    else{
                        echo "No Platelets Donation Requests";
                    }

                }
            ?>
            </div>
        
    </div>
</body>
</html>
