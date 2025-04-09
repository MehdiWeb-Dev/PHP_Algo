<?php
/*
Faîtes saisir une quantité de produits, type entier.
Faîtes choisir à l’utilisateur un mode de livraison : rapide ou normal.
Indiquez le délai de livraison correspondant à vos données selon le tableau ci-dessous.
Quantité de Produits Livraison rapide Livraison normale
< 50                    2 jours         4 jours
50 <= quantité < 100    3 jours         5 jours
100 <= quantité         5 jours         7 jours
*/

$qtiteProduit = (int)readline('Saisir une quantité de produits: ');
$choixLivraison = readline('Choisissez une type de livraison (Normale/Rapide): ');

// if ($qtiteProduit < 50 && $choixLivraison === 'Normale') {
//     echo 'La livraison se fera en 4 jours';
// } elseif ($qtiteProduit < 50 && $choixLivraison === 'Rapide') {
//     echo 'La livraison se fera en 2 jours';
// } elseif ($qtiteProduit < 100 && $choixLivraison === 'Normale') {
//     echo 'La livraison se fera en 5 jours';
// } elseif ($qtiteProduit < 100 && $choixLivraison === 'Rapide') {
//     echo 'La livraison se fera en 3 jours';
// } elseif ($qtiteProduit > 100 && $choixLivraison === 'Normale') {
//     echo 'La livraison se fera en 7 jours';
// } elseif ($qtiteProduit > 100 && $choixLivraison === 'Rapide') {
//     echo 'La livraison se fera en 5 jours';
// }

if ($choixLivraison === 'Normale') {
    if ($qtiteProduit < 50) {
        echo 'La livraison se fera en 4 jours';
    } elseif ($qtiteProduit < 100) {
        echo 'La livraison se fera en 5 jours';
    } else {
        echo 'La livraison se fera en 7 jours';
    }
} else {
    if ($qtiteProduit < 50) {
        echo 'La livraison se fera en 2 jours';
    } elseif ($qtiteProduit < 100) {
        echo 'La livraison se fera en 3 jours';
    } else {
        echo 'La livraison se fera en 5 jours';
    }
}
