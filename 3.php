<?php

//Task 3

function reverse_wors($string) {

    if (!empty($string)) {

        $reverse_string = '';

        $words = explode(" ", $string);
        $word_count = count($words);

        foreach ($words as $index => $word) {
            
            $reverse_string .= strrev(trim($word));

            if ($index < ($word_count - 1)) {
                $reverse_string .= ' ';
            }
        }

        echo $reverse_string;

    } else {
        echo 'No Sentence Found';
    }
}

reverse_wors("I love programming");