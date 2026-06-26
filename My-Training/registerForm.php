
<?php

session_start();

$userName = '';
$userEmail = '';
$checkValue = [];

if(isset($_POST['registerBtn'])){
    $userName = $_POST['userName'];
    $userEmail = $_POST['userEmail'];
    $userPassword = $_POST['userPassword'];
    $userConfirmPassword= $_POST['userConfirmPassword'];

    if(empty($userName)){
        $checkValue['userName'] = "User name is required..";
    }

    if(empty($userEmail)){
        $checkValue['userName'] = "User email is required..";
    }

    if(empty($userPassword)){
        $checkValue['userName'] = "User password is required..";
    }

    if(empty($userConfirmPassword)){
        $checkValue['userName'] = "User confirm password is required..";
    }

    if(!empty($userPassword) && !empty($userConfirmPassword) && ($userPassword !== $userConfirmPassword)){
        $checkValue['match'] = "Password Doesn't Match..";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Form</title>
</head>
<body>
    <h2>Register Form</h2>
   <form action="" method="post">
     Name: <br>
    <input type="text" name="userName" id=""><br>
    Email: <br>
    <input type="email" name="userEmail" id=""><br>
    Password: <br>
    <input type="password" name="userPassword" id=""><br>
    Confirm Password: <br>
    <input type="password" name="userConfirmPassword" id=""><br>
    <input type="submit" value="Resigter" name="registerBtn">
   </form>
</body>
</html>