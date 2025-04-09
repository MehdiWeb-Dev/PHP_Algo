<?php

$notes = [5, 2, 9, 1, 3];

for ($i = 0; $i < count($notes); $i++) {
    $maxIndex = $i;
    for ($j = $i + 1; $j < count($notes); $j++) {
        if ($notes[$j] > $notes[$maxIndex]) {
            $maxIndex = $j;
        }
    }
    $temp = $notes[$i];
    $notes[$i] = $notes[$maxIndex];
    $notes[$maxIndex] = $temp;
}

print_r($notes);
