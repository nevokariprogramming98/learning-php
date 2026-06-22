<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    session_start();
    ?>
    <?php
    // 1. Initialize variables with default values so they always exist
    $userName = '';
    $userEmail = '';
    $userPassword = '';
    $userConfirmPassword = '';
    $checkValue = [];

    if(isset($_POST['registerbtn'])){
        
        $userName = $_POST['userName'];
        $userEmail = $_POST['userEmail'];
        $userPassword = $_POST['userPassword'];
        $userConfirmPassword = $_POST['userConfirmPassword'];

        if(empty($userName)){
            $checkValue["userName"] = "<small style='color:red;'>Name Field is required..</small>";
        }

        if(empty($userEmail)){
            $checkValue["userEmail"] = "<small style='color:red;'>Email Field is required..</small>";
        }

        if(empty($userPassword)){
            $checkValue["userPassword"] = "<small style='color:red;'>Password Field is required..</small>";
        }

        if(empty($userConfirmPassword)){
            $checkValue["userConfirmPassword"] = "<small style='color:red;'>Confirm Password Field is required..</small>";
        }

        if($userPassword != $userConfirmPassword){
            $checkValue["status"] = "<small style= 'color:red;'>Password not match</small>";
        }

        if(empty($checkValue)){
            $_SESSION["registerData"]=[
                'email' => $userEmail,
                'password' => password_hash($userPassword,PASSWORD_BCRYPT) 
            ];

            header("Location:login.php");
        }
    }
    ?>
    <div class="loginForm">
        <form action="" method="post">
        Name: <br>
        <input type="text" name="userName" id="" value="<?php echo $userName ?? '';  ?>" > <br> <?php echo $checkValue['userName'] ?? ''; ?> <br>
        Email: <br>
        <input type="email" name="userEmail" id="" value="<?php echo $userEmail ?? ''; ?>" > <br> <?php echo $checkValue['userEmail'] ?? ''; ?> <br>
        Password: <br>
        <input type="text" name="userPassword" id="" value="<?php echo $userPassword ?? ''; ?>"> <br> <?php echo $checkValue['userPassword'] ?? ''; ?> <br>
        Confirm Password: <br>
        <input type="text" name="userConfirmPassword" id="" value="<?php echo $userConfirmPassword ?? '';  ?>" ><br> <?php echo $checkValue['userConfirmPassword'] ?? ''; ?> <br>
        <input type="submit" name="registerbtn" value="Register">
        </form>
    </div>
    
</body>
</html>