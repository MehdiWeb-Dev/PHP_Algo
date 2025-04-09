<?php

$notes = [12, 5, 19, 3, 8, 17];
$max = $notes[0];
foreach ($notes as $note) {
    if ($max < $note) {
        $max = $note;
    }
}
echo $max;
