<?php

trait hello
{
    public function sayhello()
    {
        echo "Hello Everyone\n";
    }

    public function sayhi()
    {
        echo "Hi Everyone\n";
    }
}
trait bye
{
    public function saybye()
    {
        echo "Bye Bye Everyone\n";
    }
}

class base
{
    use hello, bye;
}

class base2
{
    use hello, bye;
}
$test = new base(0);
// $test = new base2();
$test->sayhello();
echo "<br>";
$test->saybye();
echo "<br>";
$test->sayhi();
