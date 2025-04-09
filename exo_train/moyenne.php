<?php

$notes = [12, 15, 10, 18];

// foreach ($notes as $note) {
//     $somme = array_sum($notes);
//     $moyenne = $somme / count($notes);
// }

// echo $moyenne;
$somme = 0;
for ($i = 0; $i < count($notes); $i++) {
    $somme = $somme + $notes[$i];
}
$moyenne = $somme / count($notes);
echo $moyenne;
