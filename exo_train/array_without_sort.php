<?php

$notes = [5, 2, 9, 1, 3];

for ($i = 0; $i < count($notes); $i++) {
    $minIndex = $i;
    for ($j = $i; $j < count($notes); $j++) {
        if ($notes[$j] < $notes[$minIndex]) {
            $minIndex = $j;
        }
    }
    $temp = $notes[$i];
    $notes[$i] = $notes[$minIndex];
    $notes[$minIndex] = $temp;
}

print_r($notes);
