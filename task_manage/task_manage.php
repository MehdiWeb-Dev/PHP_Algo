<?php

$filename = "taches.json";
$data = file_exists($filename) ? json_decode(file_get_contents($filename), true) : [];
$taskArray = is_array($data) ? $data : [];

while (true) {
    echo "1. Ajouter une tâche\n";
    echo "2. Voir les tâches\n";
    echo "3. Supprimer une tâche\n";
    echo "4. Modifier une tâche\n";
    echo "5. Trier les tâches par priorité\n";
    echo "6. Filtrer les tâches par statut\n";
    echo "7. Filtrer par statut ET priorité\n";
    echo "8. Rechercher une tâche par mot-clé\n";
    echo "9. Exporter les tâches dans un fichier texte\n";
    echo "10. Exporter les tâches en HTML imprimable\n";
    echo "11. Marquer une tâche comme 'Fait'\n";
    echo "12. Importer les tâches depuis un fichier JSON\n";
    echo "13. Quitter\n";

    $choix = (int)readline();

    if ($choix === 1) {
        $nouvelleTache = readline("nom de la tâche : ");
        echo "Statut :\n1. À faire\n2. Fait\n";
        echo "Priorité :\n1.Tranquille\n2.Faut le faire\n3. Urgent\n";
        $choixStatut = (int)readline("Mettre un status de votre tâche (1 (A faire) ou 2 (Fait)): ");
        $prioriteTache = (int)readline("Mettre une priorité pour votre tâche (1 ou 2 ou 3): ");
        if ($choixStatut === 1) {
            $statut = "A faire";
        } elseif ($choixStatut === 2) {
            $statut = "Fait";
        } else {
            $statut = "A faire";
        }

        if ($prioriteTache === 1) {
            $priorite = "Tranquille";
        } elseif ($prioriteTache === 2) {
            $priorite = "Faut le faire";
        } elseif ($prioriteTache === 3) {
            $priorite = "Urgent";
        } else {
            $priorite = "Tranquille";
        }

        $taskArray[] = [
            'texte' => $nouvelleTache,
            'statut' => $statut,
            'priorite' => $priorite
        ];
        echo "✅ Tâche ajoutée.\n";
    } elseif ($choix === 2) {
        echo "Liste des tâches :\n";
        foreach ($taskArray as $index => $task) {
            echo ($index + 1) . ". " . $task['texte'] . " [" . $task['statut'] . "]  [" . $task['priorite'] . "]\n";
        }
    } elseif ($choix === 3) {
        $numero = (int)readline("Numéro de la tâche à supprimer : ");
        if (isset($taskArray[$numero - 1])) {
            unset($taskArray[$numero - 1]);
            $task = array_values($taskArray);
            echo "❌ Tâche supprimée.\n";
        } else {
            echo "⚠️ Tâche introuvable.\n";
        }
    } elseif ($choix === 4) {
        $modifier = readline("numero de la tache à modifier : ");
        if (isset($taskArray[$numero - 1])) {
            $description = readline("Nouvelle description !");
            $taskArray[$numero - 1] = $description;
            echo "✏️ Tâche modifiée.\n";
        } else {
            echo "✏️ Tâche introuvable.\n";
        }
    } elseif ($choix === 5) {
        usort($taskArray, function ($a, $b) {
            return getPrioriteScore($a['priorite']) - getPrioriteScore($b['priorite']);
        });
        foreach ($taskArray as $index => $task) {
            echo ($index + 1) . ". " . $task['texte'] . " [" . $task['statut'] . "] [" . $task['priorite'] . "]\n";
        }
    } elseif ($choix === 6) {
        echo "Filtrer par statut :\n1. A faire\n2. Fait\n";
        $choixFiltre = (int)readline("Votre choix :");

        if ($choixFiltre === 1) {
            $statutFiltre = "A faire";
        } elseif ($choixFiltre === 2) {
            $statutFiltre = "Fait";
        } else {
            echo "❌ Choix invalide.\n";
            return;
        }

        echo "🔍 Tâches avec le statut \"$statutFiltre\" :\n";
        $trouve = false;
        foreach ($taskArray as $index => $task) {
            if ($task['statut'] === $statutFiltre) {
                echo ($index + 1) . ". " . $task['texte'] . " [" . $task['statut'] . "] [" . $task['priorite'] . "]\n";
                $trouve = true;
            }
        }

        if (!$trouve) {
            echo "📭 Aucune tâche trouvée avec ce statut.\n";
        }
    } elseif ($choix === 7) {
        echo "Filtrer par statut :\n1. A faire\n2. Fait\n";
        echo "Filtrer par priorite :\n1. Tranquille\n2. Faut le faire\n3. Urgent\n";
        $choixFiltreParStatut = (int)readline("Votre choix :");
        $choixFiltreParPriorite = (int)readline("Votre choix :");
        if ($choixFiltreParStatut === 1) {
            $statutFiltre = "A faire";
        } elseif ($choixFiltreParStatut === 2) {
            $statutFiltre = "Fait";
        } else {
            echo "❌ Statut invalide.\n";
            return;
        }

        if ($choixFiltreParPriorite === 1) {
            $prioriteFiltre = "Tranquille";
        } elseif ($choixFiltreParPriorite === 2) {
            $prioriteFiltre = "Faut le faire";
        } elseif ($choixFiltreParPriorite === 3) {
            $prioriteFiltre = "Urgent";
        } else {
            echo "❌ Priorité invalide.\n";
            return;
        }

        if ($statutFiltre && $prioriteFiltre) {
            echo "🔍 Tâches [$statutFiltre] avec priorité [$prioriteFiltre] :\n";
            $trouve = false;
            foreach ($taskArray as $index => $task) {
                if ($task['statut'] === $statutFiltre && $task['priorite'] === $prioriteFiltre) {
                    echo ($index + 1) . ". " . $task['texte'] . " [" . $task['statut'] . "] [" . $task['priorite'] . "]\n";
                    $trouve = true;
                }
            }
            if (!$trouve) echo "📭 Aucune tâche trouvée.\n";
        } else {
            echo "❌ Choix(s) invalide(s).\n";
        }
    } elseif ($choix === 8) {
        $motCle = readline("Entrez un mot clé : ");
        foreach ($taskArray as $index => $task) {
            if (strpos(strtolower($task['texte']), strtolower($motCle)) !== false) {
                echo ($index + 1) . ". " . $task['texte'] . " [" . $task['statut'] . "]  [" . $task['priorite'] . "]\n";
            } else {
                echo "La tâche n'existe pas\n";
            }
        }
    } elseif ($choix === 9) {
        $file = fopen("liste_taches.txt", "w");
        $contenu = "📝 Liste des tâches exportées :\n\n";
        foreach ($taskArray as $index => $task) {
            $contenu .= ($index + 1) . ". " . $task['texte'] . " [" . $task['statut'] . "] [" . $task['priorite'] . "]\n";
        }
        fwrite($file, $contenu);
        fclose($file);
        echo "✅ Tâches exportées avec succès dans \"$filenameTxt\" !\n";
    } elseif ($choix === 10) {
        $filenameHTML = "liste_taches.html";

        $html = "<!DOCTYPE html>
    <html lang='fr'>
    <head>
        <meta charset='UTF-8'>
        <title>Liste des tâches</title>
        <style>
            body { font-family: Arial, sans-serif; margin: 20px; }
            h1 { text-align: center; }
            ul { list-style: none; padding: 0; }
            li { margin-bottom: 10px; padding: 10px; border-bottom: 1px solid #ccc; }
            .fait { color: green; }
            .afaire { color: red; }
            .priorite { font-weight: bold; }
        </style>
    </head>
    <body>
        <h1>📝 Liste des tâches</h1>
        <ul>";

        foreach ($taskArray as $task) {
            $statutClass = strtolower(str_replace(" ", "", $task['statut'])); // "A faire" -> "afaire"
            $html .= "<li class='$statutClass'>" .
                htmlspecialchars($task['texte']) .
                " <span class='priorite'>[" . $task['priorite'] . "]</span> " .
                "<em>(" . $task['statut'] . ")</em>" .
                "</li>";
        }

        $html .= "</ul></body></html>";

        file_put_contents($filenameHTML, $html);

        echo "✅ Tâches exportées dans le fichier HTML \"$filenameHTML\" !\n";
    } elseif ($choix === 11) {
        foreach ($taskArray as $index => $contenu) {
            echo ($index + 1) . ". " . $task['texte'] . " [" . $task['statut'] . "] [" . $task['priorite'] . "]\n";
        }

        $numero = (int)readline("Ajoutez le numéro de la tâche fait : \n");

        if (isset($taskArray[$numero - 1])) {
            $taskArray[$numero - 1]['statut'] = 'Fait';
            echo "Tâche mise à jour";
        } else {
            echo "Tâche introuvable";
        }
    } elseif ($choix === 12) {
        $importFile = readline("Entreez le nom du fichier à importer (ex: taches_import.json) : ");
        if (file_exists($importFile)) {
            $importedData = json_decode(file_get_contents($importFile) . true);
            if (is_array($importedData)) {
                foreach ($importedData as $tache) {
                    if (isset($tache['texte']) && isset($tache['statut']) && $tache['priorite']) {
                        $taskArray[] = $tache;
                    }
                }
                echo "✅ Tâches importées depuis \"$importFile\" !\n";
            } else {
                echo "⚠️ Format de données invalide dans le fichier.\n";
            }
        } else {
            echo "❌ Fichier introuvable.\n";
        }
    } elseif ($choix === 13) {
        echo "💾 Sauvegarde des tâches...\n";
        file_put_contents($filename, json_encode($taskArray, JSON_PRETTY_PRINT));
        echo "👋 À bientôt !\n";
        break;
    } else {
        echo "❌ Choix invalide. Réessayez.\n";
    }
}

function getPrioriteScore($priorite)
{
    if ($priorite === 'urgent') {
        return 1;
    } elseif ($priorite === 'Faut le faire') {
        return 2;
    } else {
        return 3;
    }
}
