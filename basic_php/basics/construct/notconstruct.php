<?php
class person{   
    public $name;

    function show()
    {
        echo"your name is: " .$this->name .'<br>';    
    }
}
$p = new person();
$q = new person();
$r = new person();
$p->name = "Ram"; 
$q->name = "Hari";
$r->name = "Krish";
$p -> show(); 
$q -> show();
$r -> show();