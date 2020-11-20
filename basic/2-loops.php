<?php
$cars=array("Toyota","BMW","Honda");
echo "while loop : ";
echo "<br>";
$index=0;
while ($index<3){
    echo "cars has : ".$cars[$index];
    echo "<br>";
    $index++;
}


echo "for loop : ";
echo "<br>";
for($index=0;$index<sizeof($cars);$index++){
    echo "cars has : ".$cars[$index];
    echo "<br>";
}

echo "foreach loop :";
echo "<br>";
foreach ($cars as $car){
    echo "cars has : ".$car;
    echo "<br>";
}