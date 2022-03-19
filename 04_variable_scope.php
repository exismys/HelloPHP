<?php

$x = 50; // Global scope

function myFunction() {
    // Local scope variables
    $x = 10;
    $y = 20;
    echo "Variables inside myFunction: $x, $y<br>";
}

myFunction();
// echo "$y"; // error
echo "$x<br>"; // 50

// The Global keyword
$GLOBALS['x'] = $x + 50;
echo "$x<br>";
echo $GLOBALS['x']."<br>";

// The static keyword
function testStatic() {
    static $staticVar = 0;
    $staticVar++;
    echo "$staticVar<br>";
}

testStatic(); testStatic(); testStatic();
?>