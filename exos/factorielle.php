<?php

// Exercice 13 (Intermédiaire) : Factorielle d’un nombre
// Énoncé :
// Écris une fonction factorielle($n) qui calcule la factorielle d’un nombre entier positif.

// 👉 Formule :
// 🔹 n! = n × (n-1) × (n-2) × ... × 1
// 🔹 5! = 5 × 4 × 3 × 2 × 1 = 120

// 👉 Exemples :
// echo factorielle(5);  // 120
// echo factorielle(3);  // 6


function factorielle($n)
{
    $factorielle = 1;
    while ($n > 1) {
        $factorielle = $factorielle * $n;
        $n--;
    }
    return $factorielle;
}

$n = (int)readline("Entrez un nombre : ");
echo "La factorielle de $n est : " . factorielle($n);
