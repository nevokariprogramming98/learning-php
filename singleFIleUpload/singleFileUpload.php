<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="userPhoto" id="" accept="image/*"><br><br>
        <input type="submit" value="Upload" name="upload">
    </form>
    
    <?php

    if(isset($_POST["upload"])){
        echo "<pre>";

        $userPhoto = $_FILES["userPhoto"];
        $uploadStatus = $userPhoto["size"]/1000 < 50? true: false;


        if($uploadStatus){
            $imgName= $userPhoto["name"];
            $tmpName = $userPhoto["tmp_name"];

            $targetFileLocation = "./image/" . $imgName;

            move_uploaded_file($tmpName,$targetFileLocation);

            echo "Upload Success";
        }else{
            echo "Upload Failed. Your Photo Size must be less than 50kb...";
        }
    }
    ?>
</body>
</html>