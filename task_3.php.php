<?php
//PHP program that calculates and prints the first 10 Fibonacci numbers
function fibonacci_sequence($n) {
    $fibonacci_numbers = [0, 1];
    for ($i = 2; $i < $n; $i++) {
        $fibonacci_numbers[$i] = $fibonacci_numbers[$i - 1] + $fibonacci_numbers[$i - 2];
        if ($fibonacci_numbers[$i] > 100) {
            break;
        }
    }
    return $fibonacci_numbers;
}

$first_10_fibonacci_numbers = fibonacci_sequence(10);
foreach ($first_10_fibonacci_numbers as $number) {
    echo $number . " ";
}