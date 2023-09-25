<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>patient-page</title>
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
<frameset rows="9%,*" border="0px">
    <frame src="patient-navbar-store.php" style="background-color: rgb(126, 9, 9);">
        <frameset cols="17%,*">
            <frame src="patient-links.php">
            
                <frame name="mainframe" src="patient-intro.php">
        </frameset>
</frameset>

</html>