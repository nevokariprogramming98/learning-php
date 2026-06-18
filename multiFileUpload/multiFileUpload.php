<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="userPhotos[]" id="" accept="image/*" multiple><br><br>
        <input type="submit" value="Upload" name="upload">
    </form>
    
    <?php

    if(isset($_POST["upload"])){
        echo "<pre>";
        $userPhotos = $_FILES["userPhotos"];

        // print_r($userPhotos);

        foreach ($userPhotos["name"] as $key => $value) {
            # code...
            $photoName = uniqid(). $value;
            $photoTempName = $userPhotos["tmp_name"][$key];

            $targetFileLocation = "./images/" . $photoName;

            move_uploaded_file($photoTempName, $targetFileLocation);


        }

        }
    ?>
</body>
</html>