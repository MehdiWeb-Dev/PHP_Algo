<?php

// 5 Algorithme de Luhn
// Hans Peter Luhn est un informaticien et ingénieur germano-américain qui a développé cet
// algorithme lors de son passage chez IBM dans les années 1950.
// L'algorithme de Luhn est utilisé pour vérifier divers numéros d'identification, par exemple les
// numéros des cartes de crédits, les codes-barres (exemple ISBN) ou encore les numéros de
// sécurité sociale. Voici comment il fonctionne :

// 1. Inversion du numéro : on inverse le numéro de carte ou l'identifiant numérique que vous
// souhaitez vérifier
// 2. Doublement des chiffres pairs : on double la valeur de chaque chiffre à une position paire
// (c'est-à-dire à partir de la droite), en commençant par la deuxième position à partir de la droite.
// Si le double d'un chiffre est supérieur à 9, on soustrait 9 du résultat
// 3. Addition des chiffres : on additionne tous les chiffres du numéro, y compris les chiffres qui
// n'ont pas été doublés
// 4. Vérification de la validité : si la somme totale obtenue à l'étape précédente est un multiple de
// 10, alors le numéro est considéré comme valide selon l'algorithme de Luhn

// Exemple :
// Soit le numéro de carte de crédit suivant : 4 5 5 6 7 3 7 5 8 6 8 9 9 8 5 5
// 1. Inversion du numéro : 5 5 8 9 9 8 6 8 5 7 3 7 6 5 5 4
// 2. Doublement des chiffres pairs : 10 5 16 9 18 8 12 8 10 7 6 7 12 5 10 4
// 3. Addition des chiffres : 1 + 0 + 5 + 1 + 6 + 9 + 1 + 8 + 8 + 1 + 2 + 8 + 1 + 0 + 7 + 6 + 7 + 1 + 2 + 5 + 1 +
// 0 + 4 = 85
// 4. Vérification de la validité : 85 n'est pas un multiple de 10, donc le numéro de carte n'est pas
// valide selon l'algorithme de Luhn.
// Exercice à réaliser
// L’exercice à réaliser consiste à demander la saisie d’un numéro de carte bancaire (16 positions
// sans espaces) et ensuite vérifier si le numéro saisi est valide ou non.

function luhn($numeroCarte)
{
    if (strlen($numeroCarte) != 16 || !ctype_digit($numeroCarte)) {
        echo "Numéro invalide. Il doit comporter 16 chiffres uniquement.\n";
        return false;
    }

    $numeroCarteInverse = '';
    for ($i = strlen($numeroCarte) - 1; $i >= 0; $i--) {
        $numeroCarteInverse .= $numeroCarte[$i];
    }

    $somme = 0;
    for ($i = 0; $i < strlen($numeroCarteInverse); $i++) {
        $chiffre = (int) $numeroCarteInverse[$i];
        if ($i % 2 == 1) { // Si la position est paire après inversion (c'est-à-dire un indice impair dans l'original)
            $chiffre *= 2;
        }
        if ($chiffre > 9) {
            $chiffre -= 9; // Si le résultat est plus grand que 9, on soustrait 9
        }
        $somme += $chiffre; // Ajouter chaque chiffre traité à la somme
    }

    if ($somme % 10 == 0) {
        echo "Numéro valide selon l'algorithme de Luhn.\n";
        return true;
    } else {
        echo "Numéro invalide selon l'algorithme de Luhn.\n";
        return false;
    }
}

$numeroCarte = readline("Saisir un numéro de carte bancaire (16 chiffres): ");

luhn($numeroCarte);
