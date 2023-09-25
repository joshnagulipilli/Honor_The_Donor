<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin-page</title>
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
            $("#navbar-div").load("navbar3.php");
        }) 
    </script>
    <!-- navbar ending -->
   <div class="admin-main">
        <div class="admin-content">
             <div class="content-left">
                <h4><b>LOGIN FORM
                </b></h4>
              <form action="admin-login-process.php" method="post">
                    <div class="form-row">
                         <h4>Username:</h4>
                         <input type="text" name="username">
                    </div>
                    <div class="form-row">
                        <h4>Password:</h4>
                        <input type="password" name="password" id="pass">
                    </div>
                    <div class="form-row">
                           <button type="submit" name="admin-login">login</button>
                    </div>
              </form>
             </div>
             <div class="content-right">
                <div class="right-text">
                    <h4>New Here?</h4>
                    <p>
                        Sign up and dicover great amount of <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; oppurtunities by donating!

                    </p>
                    <button type=""><a  href="admin-signup.php" style="color:black;text-decoration: none;">SignUp</a></button>
                </div>

             </div>
        </div>
   </div>
</body>
</html>