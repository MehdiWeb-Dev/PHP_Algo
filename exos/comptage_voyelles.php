
<?php

// Exercice 12 (Intermédiaire) : Comptage des voyelles
// Énoncé :
// Écris une fonction compterVoyelles($phrase) qui retourne le nombre de voyelles (a, e, i, o, u, y) présentes dans une phrase donnée.

// 👉 Exemples :
// echo compterVoyelles("Hello World!");  // 3 (e, o, o)
// echo compterVoyelles("PHP est puissant");  // 6 (e, u, i, a, e, u)

function compterVoyelles($phrase)
{

    $voyelle = ["a", "e", "i", "o", "u", "y"];
    $i = 0;
    $compteur = 0;
    while ($i < strlen($phrase)) {
        if (in_array($phrase[$i], $voyelle)) {
            echo $phrase[$i];
            $compteur++;
        }
        $i++;
    }
    echo "\nNombre total de voyelles : " . $compteur . "\n";
}

$phrase = readline("Ecrire une phrase : ");
compterVoyelles($phrase);
