<?php

class base{
    public static $name = "Prakash and Pramod" ."<br>";
    public static function show(){
        // echo $this->name;
        echo self::$name;
    }
    public function __construct($n){
        // self::show();
        self::$name= $n;
    }

}

// echo base::$name;
// base::show();
$test = new base("Wow");
$test->show();