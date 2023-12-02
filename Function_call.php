<?php
function addNumbers($a, $b) {
    $sum = $a + $b;
    echo "Sum of $a and $b is: $sum<br>";
}

// Function with call by reference parameters
function square(&$num) {
    $num = $num * $num;
    echo "Square of the number is: $num<br>";
}

addNumbers(5,6);
$at=9;
square($at);