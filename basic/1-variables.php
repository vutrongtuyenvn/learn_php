<?php
//Bien
$bien = 10;
echo "$bien";
var_dump($bien);
echo "<br>";
//Hang
define('constant', 10);
echo constant;
var_dump(constant);
echo "<br>";
//Integer
$bienInteger = 10;
var_dump($bienInteger);
echo "<br>";
//String
$bienString = 'String';
var_dump($bienString);
echo "<br>";
//Boolean
$bienBoolean = true;
var_dump($bienBoolean);
echo "<br>";
//Array
$bienArrays = array("Nam", "Quoc", "Son", "Ha");
var_dump($bienArrays);
echo "<br>";
//Object
class  Student
{
    private $name;
    private $age;

    /**
     * Student constructor.
     * @param $name
     * @param $age
     */
    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function sayHello()
    {
        return "Hello world my name is " . $this->name . "and i am " . $this->age . " year old";
    }
}

$student = new Student("tuyen", 24);
echo $student->sayHello();
echo "<br>";
//Null
$bienNull =null;
var_dump($bienNull);

