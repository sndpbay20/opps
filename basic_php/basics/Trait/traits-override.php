<?php
// trait hello{
//     public function sayhello(){
//         echo "Hello from hello trait";
//     }
// }
// trait hi{
//     public function sayhello(){
//         echo "Hello from hi trait";
//     }
// }
// class base{
//     use hello,hi{
//         hello::sayhello insteadof hi;
//         hi::sayhello as newhello;
//     }
// }

// $test = new base(0);
// $test->sayhello();
// echo "<br>";
// $test->newhello();

trait hello{
    private function sayhello(){
        echo "Hello from hello Trait.";
    }
}
class base {
    use hello{
        hello::sayhello as public newhello;
    }
}
$test = new base(0);
// $test->sayhello();
$test->newhello();