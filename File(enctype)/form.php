<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
</head>
<body>
    <h2>Registration Form</h2>
    <hr>
    <form action="" method="post">
        User-Name: <br>
        <input type="text" name="userName" id=""><br>
        User-Email: <br>
        <input type="email" name="userEmail" id=""><br><br>
        <input type="checkbox" name="roadPath[]" id="" value="android">Android
        <input type="checkbox" name="roadPath[]" id="" value="web">Web
        <input type="checkbox" name="roadPath[]" id="" value="desktop">Desktop<br><br>
        <input type="radio" name="gender" id="" value="male">Male
        <input type="radio" name="gender" id="" value="female">Female<br><br>
        Choose Next: <br>
        <select name="source" id="" multiple>
            <option value="">Choose...</option>
            <option value="udemy">Udemy</option>
            <option value="gemini">Gemini</option>
            <option value="chatgpt">chatGPT</option>
            <option value="claudeAi">ClaudeAI</option>
        </select>
        <br>
        <br>
        <input type="file" name="image[]" accept="image/*" id="" multiple>
        <br><br>
        <input type="submit" name="register" value="Register">
    </form>

    <?php 

    
    
    if(isset($_REQUEST['register'])){
echo "<pre>";
    print_r($_REQUEST);
    }
    ?>
</body>
</html>