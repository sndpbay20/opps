<?php
 class employee
{
    public $name;
    public $age;
    public $salary;

    function __construct($n, $a, $s)
    {
        $this->name = $n;
        $this->age = $a;
        $this->salary = $s;
    }  

    function info(){
        echo "<h3>Employee Profile</h3>";
        echo "Employee Name: " . $this->name . "<br>";
        echo "Employee age: "  . $this->age . "<br>";
        echo "Employee salary: " . $this->salary ."<br>" ;
    }
}

class manager extends employee{
    public $ta = 1000;
    public $phone = 300;
    public $totalsalary;

    function info(){
        $this->totalsalary =$this->ta + $this->phone + $this->salary;

        echo "<h3>Manager Profile</h3>";
        echo "Manager Name: " . $this->name . "<br>";
        echo "Manager age: "  . $this->age . "<br>";
        echo "Manager salary: " . $this->totalsalary ."<br>" ;
    }
}
$e1 = new manager("Krish", 30, 20000);
$e2 = new employee("Rakesh sah",23,35000);

$e1-> info();
$e2->info();
?>