<?php
//PHP function that prints the first 15 numbers in the Fibonacci series using a for loop
function print_fibonacci_series($n) {
    $fibonacci_numbers = [0, 1];
    for ($i = 2; $i < $n; $i++) {
        $fibonacci_numbers[$i] = $fibonacci_numbers[$i - 1] + $fibonacci_numbers[$i - 2];
    }
    for ($i = 0; $i < $n; $i++) {
        echo $fibonacci_numbers[$i] . " ";
    }
}