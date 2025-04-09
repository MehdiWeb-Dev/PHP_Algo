<?php

/*Faites saisir un prix unitaire de produit, type réel.
Calculez le nouveau prix unitaire selon le tableau ci-dessous.
Prix unitaire Pourcentage d’augmentation
<20 10 %
20 <= prix <50 7,5 %
50<= prix <100 5 %
100 <= prix 2,5 %*/

$prixUnitaire = (float)readline('Saisir un prix : ');

if ($prixUnitaire < 20) {
    $prixUnitaire = $prixUnitaire * 1.1;
} elseif ($prixUnitaire < 50) {
    $prixUnitaire = $prixUnitaire * 1.075;
} elseif ($prixUnitaire < 50) {
    $prixUnitaire = $prixUnitaire * 1.05;
} else {
    $prixUnitaire = $prixUnitaire * 1.025;
}
echo $prixUnitaire;
