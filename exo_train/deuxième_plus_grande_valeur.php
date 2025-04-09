<?php

$notes = [12, 5, 19, 3, 8, 17];
$max = $notes[0];
$max2 = $notes[0];

foreach ($notes as $note) {
    if ($note > $max) {
        $max2 = $max;
        $max = $note;
    } elseif ($note > $max2) {
        $max2 = $note;
    }
}
echo $max2;
