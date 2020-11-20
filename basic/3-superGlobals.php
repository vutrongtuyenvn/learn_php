<?php
$bien="HELLO WORLD";
function sayHello(){
    echo $GLOBALS['bien'];
}
sayHello();