<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php session_start(); ?>

    <?php
    if(isset($_SESSION["registerData"]) && $_SESSION["status"]){
        echo "Welcome From Dashboard";
    }else{
        header("Location:login.php");
    }
    ?>

    <a href="delete.php">Logout</a>
</body>
</html>