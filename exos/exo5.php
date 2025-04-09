<?php

/* Voici comment sont facturées les photocopies dans un service de reproduction.

Les 10 premières photocopies sont facturées au prix de 0.1 euro par photocopie.
Entre 11 et 20 photocopies : les 10 premières sont au prix de 0.1 euros par photocopie, les
suivantes sont au prix de 0.08 euro par photocopie.
Entre 21 et 50 photocopies : les 10 premières sont au prix de 0.1 euros par photocopie, les 10
suivantes sont au prix de 0.08 euro par photocopie, et les suivantes sont au prix de 0.06 euro
par photocopie.
A partir de 51 photocopies : les 10 premières sont au prix de 0.1 euros par photocopie, les 10
suivantes sont au prix de 0.08 euro par photocopie, les 30 suivantes sont au prix de 0.06 euro
par photocopie, et ensuite chaque photocopie coûte 0.03 euro.

Faites saisir un nombre de photocopies et affichez-le.
Calculez le montant de la facture correspondante et affichez-le.*/


$nb_photocopies = (int)readline('Saisir un nombre de photocopies : ');
$prix = 0;

if ($nb_photocopies <= 10) {
    $prix = $nb_photocopies * 0.1;
} elseif ($nb_photocopies <= 20) {
    $prix = (10 * 0.1) + ($nb_photocopies - 10) * 0.08;
} elseif ($nb_photocopies <= 50) {
    $prix = (10 * 0.1) + (10 * 0.08) + ($nb_photocopies - 20) * 0.06;
} else {
    $prix = $prix =  (10 * 0.1) + (10 * 0.08) + (30 * 0.06) + ($nb_photocopies - 50) * 0.03;
}

echo $prix;
