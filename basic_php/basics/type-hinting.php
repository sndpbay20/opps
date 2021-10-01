<?php
// function sum($v){ // write int $v 
//     echo $v+3;
// }
// sum("hello");  //must pass numbers
/*
// function fruits($names){
//     foreach ($names as $name)
//     echo $name.'<br>';
// }

// $test = ["Apple","Banana","Orange"];
// fruits($test);
/* */
// class hello{
//     public function sayhello(){
//         echo "Hello Everyone";
//     }
// }

// class bye{
// public function saybye(){
//     echo "bye Everyone";
// }
// }

// function Wow(hello $c){
//     $c-> sayhello();
// }

// $test = new hello();
// Wow($test); 
/* */
class school{
    public function getNames($names){
        echo "<ul>";
        foreach ($names->Names() as $name){
            echo "<li>" .$name ."</li>";
        }
        echo "</ul>";
    }
}
class student{
    public function Names(){
        return ["Ram","Krishna","Bramha"];
    }
}
class library{

}

$sch = new school();
$stu = new student();
$lib = new library();

$sch->getNames($stu);


?>