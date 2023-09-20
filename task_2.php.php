<?php

//PHP script that prints numbers from 1 to 50 using a for loop.
for ($i = 1; $i <= 50; $i++) {
    if ($i % 5 === 0) {
        continue;
    }
    echo $i . " ";
}