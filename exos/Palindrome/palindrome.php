<?php
// Exercice 11 (Débutant avancé) : Vérification de palindrome
// Énoncé :
// Écris une fonction estPalindrome($mot) qui prend un mot en paramètre et retourne true si c'est un palindrome (se lit de la même façon dans les deux sens), sinon false.

// Exemples :

// echo estPalindrome("radar");  // true
// echo estPalindrome("bonjour");  // false

function estPalindrome($mot)
{
    $i = 0;
    $j = strlen($mot) - 1;  // Utiliser strlen pour obtenir la dernière position
    while ($i < $j) {
        if ($mot[$i] == $mot[$j]) {
            $i++;
            $j--;
        } else {
            return false;
        }
    }
    return true;
}

$mot = readline("Ecrire un mot : ");

if (estPalindrome($mot)) {
    echo "est un palindrome";
} else {
    echo "ce n'est pas un palindrome";
}
