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
    <title>Patient Requests</title>
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
    
    <div class="d-profile-main">
    <center><h3 style="margin-top:10px">Patients Profiles</h3></center>
    <div class="profile-flex">
        <table> 

            <tr>
                <th><center>Username</th></center>
                <th><center>FullName</th></center>
                <th><center>Email</th></center>
                <th><center>Mobile-Num</th></center>
                <th><center>Donor-Requests</th></center>
            </tr>
            <?php 
            require("config.php");
            // $username=$_SESSION['UserId'];
            $query = "SELECT * FROM `patient_registration`";
            $query_run = mysqli_query($con,$query);
            $check= mysqli_num_rows($query_run);
            if($check){
                while($row = mysqli_fetch_array($query_run))
                {
                    ?>
                    <tr>
                        <td><center><?php echo $row['username'];?></td></center>
                        <td><center><?php echo $row['fullname'];?></td></center>
                        <td><center><?php echo $row['email'];?></td></center>
                        <td><center><?php echo $row['num'];?></td></center>
                        <td><center>
                        <form action="display-patients-requests.php" method="post" >
                            <center><input type="hidden" name='timesss' value="<?php echo $row['username'] ?>">
                            <input type="submit" name="click-here" value="Click Here"  style=";color:blue; border:0px; background-color:transparent">
                </center>
                        </form>      
                        </td></center>
                    </tr>
                    <?php
                }
            }
            else{
                ?>
                <tr>
                    <td><center>No Donors Avaliable</center></td>
                </tr>
                <?php
            }
            ?>
        </table>
    </div>
    </div>
</body>
</html>