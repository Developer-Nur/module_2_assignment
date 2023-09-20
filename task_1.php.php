<?php
// PHP function that uses a for loop to print all even numbers
function print_even_numbers($start, $end, $step) {
    for ($i = $start; $i <= $end; $i += $step) {
        echo $i . " ";
    }
}
print_even_numbers(2, 20, 2);
//same logic implemented using a while loop
function print_even_numbers_while($start, $end, $step) {
    $i = $start;
    while ($i <= $end) {
        echo $i . " ";
        $i += $step;
    }
}

print_even_numbers_while(2, 20, 2);

//here’s the implementation using a do-while loop
function print_even_numbers_do_while($start, $end, $step) {
    $i = $start;
    do {
        echo $i . " ";
        $i += $step;
    } while ($i <= $end);
}

print_even_numbers_do_while(2, 20, 2);