<?php

// La recherche dichotomique, ou recherche par dichotomie (en anglais : binary search), est un
// algorithme de recherche pour trouver la position d'un élément dans un tableau trié.
// Le principe est le suivant : comparer l'élément recherché avec la valeur de la case au milieu du
// tableau. Si les valeurs sont égales, la tâche est accomplie.
// Sinon on recommence dans la moitié du tableau pertinente jusqu’à trouver la valeur recherchée
// (ou constater qu’elle n’est pas dans le tableau). Source Wikipédia.

// Exercice à réaliser
//  Soit le tableau suivant : [1, 2, 3, 5, 8, 13, 21, 34, 55, 89]
//  Faites saisir un entier et dites s’il est présent dans le tableau ci-dessus, et si oui à quelle
// position, en utilisant la méthode de la recherche dichotomique.

function dichotomie($array, $number)
{
    $low = 0;
    $high = count($array) - 1;

    while ($low <= $high) {
        $mid = intval(($low + $high) / 2);

        if ($array[$mid] === $number) {
            return "Le nombre $number est présent dans le tableau à la position $mid.";
        } elseif ($array[$mid] < $number) {
            $low = $mid + 1;
        } else {
            $high = $mid - 1;
        }
    }
    return "Le nombre $number n'est pas présent";
}

$arrayInt = [1, 2, 3, 5, 8, 13, 21, 34, 55, 89];
$number = (int)readline("Saisir un nombre : ");
echo dichotomie($arrayInt, $number);
