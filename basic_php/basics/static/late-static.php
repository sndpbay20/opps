<?php

class base {
    protected static $name = "Yahoo.com";

    public static function show(){
        // echo self::$name;
        echo static::$name;
    } 
}

class derived extends base {
    protected static $name = "Google.com";
}

$test = new derived(0);
$test->show();