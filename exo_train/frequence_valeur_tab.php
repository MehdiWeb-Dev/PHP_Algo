<?php

$frequences = [];

$nombres = [4, 7, 4, 3, 7, 9, 3];

foreach ($nombres as $nombre) {
    if (isset($frequences[$nombre])) {
        $frequences[$nombre]++;
    } else {
        $frequences[$nombre] = 1;
    }
}
print_r($frequences);
