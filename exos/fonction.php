<?php

// function carre($nombre)
// {
//     while (true) {
//         $nombre = $nombre * $nombre;
//     }

//     return $nombre;
// }

// $nombreCarre = (int)readline("Saisir un carré d'un nombre : ");
// echo carre($nombreCarre);

// function carre($nombre, $iterations)
// {

//     for ($i = 0; $i < $iterations; $i++) {
//         $nombre = $nombre * $nombre;

//         echo "Itération " . ($i + 1) . " : " . $nombre . PHP_EOL;
//     }
//     return $nombre;
// }


// $nombreCarre = (int)readline("Saisir un nombre : ");
// $iterations = (int)readline("Nombre d'itérations : ");
// $resultat = carre($nombreCarre, $iterations);


// echo "Résultat final après $iterations itérations : $resultat" . PHP_EOL;
function carre($nombre)
{
    return $nombre * $nombre;
}

$nombreCarre = (int)readline("Saisir un nombre : ");
echo "Le carré de $nombreCarre est : " . carre($nombreCarre) . PHP_EOL;
