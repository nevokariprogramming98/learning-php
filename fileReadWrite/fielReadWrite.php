<?php

// $fileWrite = fopen("testing.txt", "w");
// fwrite($fileWrite, "This is testing file write.");
// echo "File Write Successful";


$fileRead = fopen("testing.txt", "r");
$message = fread($fileRead, filesize("testing.txt"));
$updateMessage = $message . "update message";

$fileWrite = fopen("testing.txt","w");
fwrite($fileWrite, $updateMessage);
echo "File update Successful";