<?php

$tableau = [1, 2, 3, 4];
$reverseArray = [];

for ($i = count($tableau) - 1; $i >= 0; $i++) {
    $reverseArray[] = $tableau[$i];
}

print_r($reverseArray);
