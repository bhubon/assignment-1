<?php

//Task 4

$n = 10;

for ($i = 1; $i <= $n; $i++) {
    $line = '';
    for ($j = 1; $j <= ((2 * $n) - 1); $j++) {

        if ($j >= $n - ($i - 1) && $j <= $n + ($i - 1)) {
            $line .= "*";
        } else {
            $line .= ' ';
        }
    }
    echo $line . PHP_EOL;
}