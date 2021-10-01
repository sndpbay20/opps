<?php
class person{
    public $name;
    public $age ;

    function __construct($name = "No name", $age= 0)
    {
        $this->name = $name;
        $this->age = $age;
    }
    function show()
    {
        echo $this->name . " - ". $this->age .'<br>' ;
    }
}

$p1 = new person();
$p2 = new person("Seema", 25);
$p3 = new person("Ram kumar", 30);
// $p1->name = "janaki";
// $p1->age = 20;

$p1->show();
$p2->show();
$p3->show();