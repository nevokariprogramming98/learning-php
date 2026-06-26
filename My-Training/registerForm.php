
<?php

session_start();

$userName = '';
$userEmail = '';
$checkValue = [];

if(isset($_POST['registerBtn'])){
    $userName = trim($_POST['userName']);
    $userEmail = trim($_POST['userEmail']);
    $userPassword = $_POST['userPassword'];
    $userConfirmPassword= $_POST['userConfirmPassword'];

    if(empty($userName)){
        $checkValue['userName'] = "User name is required..";
    }

    if(empty($userEmail)){
        $checkValue['userEmail'] = "User email is required..";
    }

    if(empty($userPassword)){
        $checkValue['userPassword'] = "User password is required..";
    }

    if(empty($userConfirmPassword)){
        $checkValue['userConfirmPassword'] = "User confirm password is required..";
    }

    if(!empty($userPassword) && !empty($userConfirmPassword) && ($userPassword !== $userConfirmPassword)){
        $checkValue['match'] = "Password Doesn't Match..";
    }

    if(empty($checkValue)){
        $_SESSION["registerData"]=[
            "name" => $userName,
            "email" => $userEmail,
            "password" => password_hash($userPassword,PASSWORD_BCRYPT)
        ];

        header("Location:login.php");
        exit();
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
    <input type="text" name="userName" id="" value="<?php echo htmlspecialchars($userName); ?>"><br>
    <?php if(isset($checkValue['userName'])) echo "<small style='color:red;'>{$checkValue['userName']}</small>"; ?><br>
    Email: <br>
    <input type="email" name="userEmail" id="" value="<?php echo htmlspecialchars($userEmail); ?>"><br>
    <?php if(isset($checkValue['userEmail'])) echo "<small style='color:red;'>{$checkValue['userEmail']}</small>"; ?><br>
    Password: <br>
    <input type="password" name="userPassword" id=""><br>
    <?php if(isset($checkValue['userPassword'])) echo "<small style='color:red;'>{$checkValue['userPassword']}</small>"; ?><br>
    Confirm Password: <br>
    <input type="password" name="userConfirmPassword" id=""><br>
    <?php if(isset($checkValue['userConfirmPassword'])) echo "<small style='color:red;'>{$checkValue['userConfirmPassword']}</small>"; ?><br>
    <?php if(isset($checkValue['match'])) echo "<small style='color:red;'>{$checkValue['match']}</small>"; ?><br>

    <input type="submit" value="Resigter" name="registerBtn">
   </form>
</body>
</html>