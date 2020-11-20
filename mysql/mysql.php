<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
$connect=mysqli_connect("localhost",'mysqls','123','mysqls');
//var_dump($connect);

/*Insert*/

//$insertSql="INSERT INTO `test` (`id`, `name`) VALUES (2, 'tuyenvt2')";
//mysqli_query($connect,$insertSql);

/*Select*/
$selectSql="SELECT * FROM `test`";
$selectQuery=mysqli_query($connect,$selectSql);

if(mysqli_num_rows($selectQuery)>0){
    while ($row = mysqli_fetch_row($selectQuery)){
        echo $row[0].$row[1]."<br>";
    }
}
?>
</body>
</html>