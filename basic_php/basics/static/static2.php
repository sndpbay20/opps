<?php

use derived as GlobalDerived;

class base{
    public static $name = "Hello World";   
}

class derived extends base{
    // public static function show(){
        public function show(){
       echo parent::$name;
    }
}

$test = new derived(0);
$test -> show(); // to call 