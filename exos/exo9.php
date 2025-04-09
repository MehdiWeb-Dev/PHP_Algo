<?php
/*Test de dates
Faîtes saisir deux dates.
Chaque date doit être saisie en remplissant d’abord le jour, puis le mois et enfin l’année.
A l’aide d’un algorithme, déterminez quelle est la date la plus récente des deux. */

$jour1 = (int)readline('Saisir un jour: ');
$mois1 = (int)readline('Saisir un mois: ');
$annee1 = (int)readline('Saisir une année: ');
$jour2 = (int)readline('Saisir un jour: ');
$mois2 = (int)readline('Saisir un mois: ');
$annee2 = (int)readline('Saisir une année: ');

if ($jour1 > $jour2) {
    echo "La première date est plus récente";
} elseif ($mois1 > $mois2) {
    echo "La première date est plus récente";
} elseif ($annee1 > $annee2) {
    echo "La première date est plus récente";
} else {
    if ($jour1 < $jour2) {
        echo "La deuxième date est plus récente";
    } elseif ($mois1 < $mois2) {
        echo "La deuxième date est plus récente";
    } elseif ($annee1 < $annee2) {
        echo "La deuxième date est plus récente";
    }
}
