<?php

include 'db.php';


abstract class car
{
    private $name;
    private $speed;

    public function __construct($name, $speed)
    {
        $this->name = $name;
        $this->speed = $speed;
    }
    abstract public function cardetails();
    public function getname()
    {
        return $this->name;
    }
}

class realcar extends car
{
    public function cardetails()
    {
        return 'the car details';
    }
}

$car1 = new realcar('audi a3', 200);
$car2 = new realcar('audi a4', 300);

var_dump($car1);
echo '<br>';
$car1serial = serialize($car1);
var_dump($car1serial);

$sql = 'INSERT INTO user VALUES(car = :car1serial)';
$stmt = $pdo->prepare($sql);
$stmt->execute([
    'car' => $car1serial
]);
