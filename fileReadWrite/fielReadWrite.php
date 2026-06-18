<?php

// $fileWrite = fopen("testing.txt", "w");
// fwrite($fileWrite, "This is testing file write.");
// echo "File Write Successful";

// $fileRead = fopen("testing.txt", "r");
// $message = fread($fileRead, filesize("testing.txt"));
// $updateMessage = $message . "update message";

// $fileWrite = fopen("testing.txt","w");
// fwrite($fileWrite, $updateMessage);
// echo "File update Successful";

// reading file
// $filename = "testing.txt";
// $fileHandle = fopen($filename,"r");

// if($fileHandle && filesize($filename)>0){
//     $content = fread($fileHandle,filesize($filename));

//     echo $content;
//     fclose($fileHandle);
// };


$filename = "app_log.txt";
$fileHandle = fopen($filename,"a");

if($fileHandle){
$timestamp = date("Y-m-d H:i");
$logMessage = "[$timestamp] User Logged in. \n";

fwrite($fileHandle,$logMessage);
fclose($fileHandle);

echo "Log Updated Successfully";
}else{
    echo "Permission Error: Can't write to file.";
};


