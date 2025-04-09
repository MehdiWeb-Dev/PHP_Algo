<?php

function moyenne($tableau)
{
    if (count($tableau) === 0) {
        return "Le tableau est vide, impossible de calculer la moyenne.";
    }
    $moyenne = array_sum($tableau) / count($tableau);
    return $moyenne;
}

$array =  [5, 2, 8, 20, 190];
echo moyenne($array);
