<?php
function genererMotDePasse($longueur)
{
    if ($longueur > 0) {
        echo "test";
    }
    $caracteres = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";

    $motDePasse = '';

    for ($i = 0; $i < $longueur; $i++) {
        $indexAleatoire = rand(0, strlen($caracteres) - 1);
        $motDePasse .= $caracteres[$indexAleatoire];
    }
    return $motDePasse;
}
echo genererMotDePasse(10); // Ex: "A7bD9fK2Lp"
