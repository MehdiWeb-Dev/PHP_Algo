<?php

$somme = 0;
for ($i = 1; $i <= 100; $i++) {
    if ($i % 2 == 1) {
        $somme += $i;
    }
}
echo "La somme des nombres impairs entre 1 et 100 est : $somme";
