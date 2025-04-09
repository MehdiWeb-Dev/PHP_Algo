<?php


while (true) {
    $mot = readline("Ecrire un mot : ");
    $inverse = strrev($mot);
    if ($mot === $inverse) {
        echo "$mot est un palindrome \n";
    } else {
        echo "$mot n'est pas un palindrome \n";
    }
    $reponse = readline("Voulez-vous tester un autre mot ? (oui/non) : ");
    if ($reponse == 'non') {
        break;
    }
}
