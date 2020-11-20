<?php
$userName=$_POST['userName'];
$password=isset($_POST['password'])?$_POST['password']:"";
echo $userName.$password;