<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $userEmail = "";
    $userPassword = "";
    $checkValidation =[];

    if(isset($_POST["login-btn"])){
        $userEmail = $_POST["email"];
        $userPassword = $_POST["password"];

        if(empty($userEmail)){
            $checkValidation["email"] = "<small style='color:red;'>Email need to fill</small>";
        }

        if(empty($userPassword)){
            $checkValidation["password"] = "<small style='color:red;'>Passwrod need to fill</small>";

        }

        if(isset($_SESSION["registerData"])){

            if($userEmail == $_SESSION["registerData"]['email'] && password_verify($userPassword,$_SESSION["registerData"]['password'])){
            $_SESSION["status"] = true;    
            header("Location:dashboard.php");
            }else{
                echo "<small style='color:red;'>password don't match to records. Try Again....</small>";
            }
        }
    }

    ?>
    <form action="" method="post">
        Email: <input type="email" name="email" id="" value="<?php echo $_POST['email'] ?? ''; ?>"><br> <?php echo $checkValidation["email"] ?? ""; ?>
        Password: <input type="text" name="password" id="" value="<?php echo $_POST['password'] ?? ''; ?>"><br> <?php echo $checkValidation["password"] ?? ""; ?>
        <input type="submit" value="Log In" name="login-btn">
    </form>
</body>
</html>