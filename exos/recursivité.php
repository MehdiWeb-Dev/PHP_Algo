<?php

// La factorielle d'un nombre entier positif, notée avec un point d'exclamation (!), est le produit de
// tous les entiers positifs inférieurs ou égaux à ce nombre.
// Par exemple, la factorielle de 5 (notée 5!) est égale à 5 × 4 × 3 × 2 × 1, ce qui donne 120.
// En termes mathématiques, la factorielle d'un nombre n’est définie comme ceci :
// n! = n * (n – 1) * (n – 2) * ... * 2 * 1

// Exercice à réaliser
// Faire saisir un entier.
// Calculer la factorielle de cet entier avec deux méthodes différentes :
//  en utilisant une boucle
//  en utilisant la récursivité


// function fact($number)
// {
//     $f = 1;
//     for ($i = 1; $i <= $number; $i++) {
//         $f = $f * $i;
//     }
//     return $f;
// }

// $n = (int)readline("Entrez un nombre : ");
// $f = fact($n);
// echo "La factorielle de $n est $f";

function fact($number)
{
    if ($number <= 1) {
        return 1;
    } else {
        return $number * fact($number - 1);
    }
}


$number = (int)readline('Saisir un nombre : ');
$f = fact($number);
echo "La factorielle de $number est $f";
