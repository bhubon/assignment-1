<?php

// Task 1

function minimum_number($numbers) {

    $numbersArray = explode(' ', $numbers);
    $absolute_numbers = [];

    foreach ($numbersArray as $number) {
        if (is_numeric(trim($number))) {
            $absolute_numbers[] = abs($number);
        }
    }

    if (!empty($absolute_numbers)) {
        echo min($absolute_numbers);
    } else {
        echo 'No valid numbers provided';
    }
}

minimum_number("10 12 34 12 -3 1 25 4 123");