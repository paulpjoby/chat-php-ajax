<?php 
// this reads the file and echo it that it gets the file data and echo it
$file= fopen("chat.txt","r");
$filesize=filesize("chat.txt");
$filesize++;
echo fread($file,$filesize);
fclose($file);

?>