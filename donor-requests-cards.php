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
    <div class="requests-main-div">
        <center><h2 style="margin:20px; margin-bottom:30px">My Requests</h2></center>
        <center><h3>Blood Requests</h3></center>
        <div class="requests-cards-div">

        <?php 
          require("config.php");
          $username=$_SESSION['UserId'];
          $query = "SELECT * FROM `blood-donation-form` WHERE username='$username'";
          $query_run = mysqli_query($con,$query);
          $check= mysqli_num_rows($query_run);
          if($check){
            while($row = mysqli_fetch_array($query_run))
            {
                ?>
                <div class="req-card">
                    <p style="font-size:20px"><b>Username   &nbsp&nbsp&nbsp&nbsp&nbsp:</b> <span><?php echo $row['username'];?></span></p>
                    <p style="font-size:20px"><b>Age &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp :</b> <span><?php echo $row['age'];?></span></p>
                    <p style="font-size:20px"><b>Units &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:</b> <span><?php echo $row['units'];?></span></p>
                    <p style="font-size:20px"><b>Blood Group  :</b> <span><?php echo $row['bloodgrp'];?></span></p>
                    <p style="font-size:20px"><b> Number &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:</b> <span><?php echo $row['number'];?></span></p>
                    <p style="font-size:20px"><b>Recent Donation :</b> <span><?php echo $row['recent'];?></span></p>
                    <p style="font-size:20px"><b>Weight &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:</b> <span><?php echo $row['weight'];?></span></p>
                    <p style="font-size:20px"><b>Address &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:</b> <span><?php echo $row['address'];?></span></p>
                    <p style="font-size:20px"><b>Reports &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:</b><a style="font-size:15px; margin-left:5px; text-decoration:none" href="<?php echo $row['reports'];?>">Click Here </a><br></p>
                    <form action="delete-donate-card.php" method="post" >
                            <input type="hidden" name='timesss' value="<?php echo $row['id'] ?>">
                            <input type="submit" name="delete-blood" value="DELETE" class="btn btn-primary" style="margin-top:10px;background-color:red ;color:white;border:1px solid red; margin-right:80px; width:80px;height:40px">
                           
                   </form>
                </div>
                <?php
            }
          }
          else{
            echo "No Blood Donations Request";
          }
          ?>
            

            
            
        </div>
        <center><h3>Plasma Requests</h3></center>
        <div class="requests-cards-div">

        <?php 
          require("config.php");
          $username=$_SESSION['UserId'];
          $query = "SELECT * FROM `plasma-donation-form` WHERE username='$username'";
          $query_run = mysqli_query($con,$query);
          $check= mysqli_num_rows($query_run);
          if($check){
            while($row = mysqli_fetch_array($query_run))
            {
                ?>
                <div class="req-card">
                    <p style="font-size:20px"><b>Username :</b> <span><?php echo $row['username'];?></span></p>
                    <p style="font-size:20px"><b>Age :</b> <span><?php echo $row['age'];?></span></p>
                    <p style="font-size:20px"><b>Units :</b> <span><?php echo $row['units'];?></span></p>
                    <p style="font-size:20px"><b>Blood Group :</b> <span><?php echo $row['bloodgrp'];?></span></p>
                    <p style="font-size:20px"><b>Number :</b> <span><?php echo $row['number'];?></span></p>
                    <p style="font-size:20px"><b>Recent Donation :</b> <span><?php echo $row['recent'];?></span></p>
                    <p style="font-size:20px"><b>Weight :</b> <span><?php echo $row['weight'];?></span></p>
                    <p style="font-size:20px"><b>Address :</b> <span><?php echo $row['address'];?></span></p>
                    <p style="font-size:20px"><b>Reports :</b></p>
                    <a href="<?php echo $row['reports'];?>">Click Here </a><br>
                    <form action="delete-donate-card.php" method="post">
                            <input type="hidden" name='timesss' value="<?php echo $row['id'] ?>">
                            <p><input type="submit" name="delete-plasma" value="DELETE" class="btn btn-primary" style="margin-top:5px;background-color:red ;color:white;border:1px solid red;"></p>
                   </form>
                </div>
                <?php
            }
          }
          else{
            echo "No Plasma Donations Request";
          }
          ?>
            

            
            
        </div>
        <center><h3>Platelets Requests</h3></center>
        <div class="requests-cards-div">

        <?php 
          require("config.php");
          $username=$_SESSION['UserId'];
          $query = "SELECT * FROM `platelets-donation-form` WHERE username='$username'";
          $query_run = mysqli_query($con,$query);
          $check= mysqli_num_rows($query_run);
          if($check){
            while($row = mysqli_fetch_array($query_run))
            {
                ?>
                <div class="req-card">
                    <p style="font-size:20px"><b>Username :</b> <span><?php echo $row['username'];?></span></p>
                    <p style="font-size:20px"><b>Age :</b> <span><?php echo $row['age'];?></span></p>
                    <p style="font-size:20px"><b>Units :</b> <span><?php echo $row['units'];?></span></p>
                    <p style="font-size:20px"><b>Blood Group :</b> <span><?php echo $row['bloodgrp'];?></span></p>
                    <p style="font-size:20px"><b>Number :</b> <span><?php echo $row['number'];?></span></p>
                    <p style="font-size:20px"><b>Recent Donation :</b> <span><?php echo $row['recent'];?></span></p>
                    <p style="font-size:20px"><b>Weight :</b> <span><?php echo $row['weight'];?></span></p>
                    <p style="font-size:20px"><b>Address :</b> <span><?php echo $row['address'];?></span></p>
                    <p style="font-size:20px"><b>Reports :</b></p>
                    <a href="<?php echo $row['reports'];?>">Click Here </a><br>
                    <form action="delete-donate-card.php" method="post">
                            <input type="hidden" name='timesss' value="<?php echo $row['id'] ?>">
                            <p><input type="submit" name="delete-platelets" value="DELETE" class="btn btn-primary" style="margin-top:5px;background-color:red ;color:white;border:1px solid red;"></p>
                   </form>
                </div>
                <?php
            }
          }
          else{
            echo "No Platelets Donations Request";
          }
          ?>
            

            
            
        </div>
    </div>
</body>
</html>