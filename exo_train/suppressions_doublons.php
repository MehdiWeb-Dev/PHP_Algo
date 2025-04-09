<?php

$nombres = [4, 7, 4, 3, 7, 9, 3];

$resultat = [];

foreach ($nombres as $nombre) {
    if (!in_array($nombre, $resultat)) {
        $resultat[] = $nombre;
    }
}

print_r($resultat);
