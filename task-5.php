<?php

//Task 5

function int_sum($int) {

    if (!empty($int) && is_numeric($int)) {
        $sum = 0;

        $int = abs($int);

        while ($int !== 0) {

            $sum += ($int % 10);

            $int = (int) ($int / 10);
        }

        echo $sum;

    } else {
        echo 'No input given';
    }
}

int_sum(100);