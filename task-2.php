<?php

// Task 2

$file = "./file.txt";

if (file_exists($file)) {

    $input = file_get_contents($file);
    if (!empty($input)) {

        $words = preg_split("/[\s]/", $input, -1, PREG_SPLIT_NO_EMPTY);

        echo count($words);

    } else {
        echo "No content on the file";
    }

} else {
    echo "File not found";
}