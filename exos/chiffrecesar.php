<?php

// Définition (source Wikipédia) :
// En cryptographie, le chiffrement par décalage, aussi connu comme le chiffre de César (ou le code
// de César) est une méthode de chiffrement très simple utilisée par Jules César dans ses
// correspondances secrètes.
// Le texte chiffré s'obtient en remplaçant chaque lettre du texte en clair original par une lettre à
// distance fixe, toujours du même côté, dans l'ordre de l'alphabet.
// Pour les dernières lettres (dans le cas d'un décalage à droite), on reprend au début.
// Par exemple avec un décalage de 3 vers la droite, A est remplacé par D, B devient E, et ainsi
// jusqu'à W qui devient Z, puis X devient A etc. Il s'agit d'une permutation circulaire de l'alphabet.
// La longueur du décalage, 3 dans l'exemple évoqué, constitue la clé du chiffrement qu'il suffit de
// transmettre au destinataire — s'il sait déjà qu'il s'agit d'un chiffrement de César — pour que celui-ci
// puisse déchiffrer le message.
// Dans le cas de l’alphabet latin, le chiffre de César n'a que 26 clés possibles (y compris la clé nulle,
// qui ne modifie pas le texte).
// Exercice à réaliser
//  Faire saisir un message
//  Faire saisir le décalage souhaité, c’est-à-dire le nombre de caractères de décalage
//  Faire saisir le sens du décalage (ordre alphabétique ou ordre alphabétique inverse)
//  Faire le décalage et afficher le message après décalage


function chiffreDeCesar($texte, $decalage, $sens)
{
    $texteChiffre = '';
    $texte = strtolower($texte);

    if ($sens === 'inverse') {
        $decalage = -$decalage;
    }
    for ($i = 0; $i < strlen($texte); $i++) {
        $char = $texte[$i];

        // Si le caractère est une lettre
        if ($char >= 'a' && $char <= 'z') {
            $ascii = ord($char); // Obtenez la valeur ASCII du caractère
            $asciiDechiffre = (($ascii - 97 + $decalage) % 26) + 97; // Appliquer le décalage et garantir que c'est dans l'intervalle [a-z]
            $texteChiffre .= chr($asciiDechiffre); // Convertir de nouveau en caractère
        } else {
            // Si ce n'est pas une lettre, ajoutez-le tel quel (espaces, ponctuation, etc.)
            $texteChiffre .= $char;
        }
    }

    return $texteChiffre;
}

$texte = readline("Saisir un message: ");

$decalage = (int)readline("Saisir le décalage (nombre de caractères) : ");

$sens = readline("Saisir le sens du décalage (ordre alphabétique ou inverse) : ");

if ($sens !== 'ordre alphabétique' && $sens !== 'inverse') {
    echo "Sens de décalage invalide. Utilisez 'ordre alphabétique' ou 'inverse'.\n";
    exit;
}

$texteChiffre = chiffreDeCesar($texte, $decalage, $sens);

echo "Message après décalage : " . $texteChiffre . "\n";
