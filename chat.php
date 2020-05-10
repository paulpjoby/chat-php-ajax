<?php
$m=$_GET["msg"]; // m contains the message recived from the user
// Now Save in to a file
echo $m;
$f=fopen("chat.txt","a");
echo fwrite($f,$m);
fclose($f);

//Check
?>