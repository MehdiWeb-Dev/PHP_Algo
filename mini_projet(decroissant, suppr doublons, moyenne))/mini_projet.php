<?php

$notes = [12, 8, 16, 12, 5, 19, 8, 7, 16];
$notesSansDoublons = [];
for ($i = 0; $i < count($notes); $i++) {
    $maxIndex = $i;
    for ($j = $i + 1; $j < count($notes); $j++) {
        if ($notes[$j] > $notes[$maxIndex]) {
            $maxIndex = $j;
        }
    }

    $temp = $notes[$i];
    $notes[$i] = $notes[$maxIndex];
    $notes[$maxIndex] = $temp;
}
$somme = 0;

foreach ($notes as $note) {
    if (!in_array($note, $notesSansDoublons)) {
        $notesSansDoublons[] = $note;
        $somme = $somme + $note;
    }
}

$moyenne = $somme / count($notesSansDoublons);

echo "✅ Meilleure note : " . $notesSansDoublons[0] . "\n";
echo "❌ Moins bonne note : " . $notesSansDoublons[count($notesSansDoublons) - 1] . "\n";
echo "📊 Moyenne : " . round($moyenne, 2) . "\n";
echo "📋 Notes finales : ";
print_r($notesSansDoublons);
