<?php

require 'products.php';
require 'testing.php';

function wow() {
    echo "wow from index file.";
}

use pro\v1\command as cmd;

$obj = new pro\v1\command\product;
echo "<br>";
$obj = new pro\v1\command\product;
// echo "<br>";
// $obj1 = new test\product;
// pro\wow();