<?php
$fileWrite=fopen('file.txt','a');
fwrite($fileWrite,"Ly thuong kiet");
$fileRead=fopen('file.txt','r');
$content = fread($fileRead,filesize("file.txt"));
fclose($fileWrite);
fclose($fileRead);
echo $content;