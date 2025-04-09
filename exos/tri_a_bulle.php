<?php

function bubbleSort($array): array
{
    $n = count($array);

    // while (count($arrayInt) < 10) {
    //     $numbers = (int)readline('Saisir un nombre : ');
    //     $arrayInt[] = [$numbers];
    // }
    do {
        $swapped = false;
        for ($i = 0; $i < $n - 1; $i++) {
            if ($array[$i] > $array[$i + 1]) {
                [$array[$i], $array[$i + 1]] = [$array[$i + 1], $array[$i]];
                $swapped = true;
            }
        }
        $n--;
    } while ($swapped);

    return $array;
}

$arrayInt = [];

while (count($arrayInt) < 10) {
    $number = (int)readline("Entrez un nombre :");
    $arrayInt[] = $number;
}
print_r($arrayInt);  // Afficher le tableau avant le tri
$arrayInt = bubbleSort($arrayInt);
print_r($arrayInt);  //