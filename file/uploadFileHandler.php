<?php
$fileUpload=$_FILES["file"];
move_uploaded_file($fileUpload["tmp_name"],'./upload/'.$fileUpload["name"]);


