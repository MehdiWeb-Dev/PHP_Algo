<?php

$nombreSecret = rand(0, 100);
$essais = 0;
while (true) {
    $nombre = (int)readline('Ecrire un nombre à deviner : ');
    if ($nombre > $nombreSecret) {
        echo "Trop grand \n";
    } elseif ($nombre === $nombreSecret) {
        echo "Bravo ! Tu as trouvé en $essais essais !\n";
        break;
    } else {
        echo "Trop petit \n";
    }
    $essais++;
}
