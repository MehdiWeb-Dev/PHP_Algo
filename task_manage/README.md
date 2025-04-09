📊 Fonctionnalités principales

Ajouter une tâche avec :

Nom de la tâche

Statut (A faire / Fait)

Priorité (Tranquille / Faut le faire / Urgent)

Voir toutes les tâches enregistrées

Supprimer ou modifier une tâche

Trier les tâches par priorité

Filtrer par statut ou par priorité

Rechercher une tâche par mot-clé

Marquer une tâche comme "Fait"

Exporter les tâches en :

Fichier .txt lisible

Fichier .html imprimable

Importer des tâches depuis un fichier .json

📁 Structure attendue d'une tâche (format JSON)

{
  "texte": "Faire les courses",
  "statut": "A faire",
  "priorite": "Urgent"
}

Lancer l'application

php task_manage.php

Utilisez les numéros du menu pour accéder aux différentes fonctionnalités

Export de fichiers

liste_taches.txt : version texte brute des tâches

liste_taches.html : version imprimable, avec mise en page HTML

📂Organisation des fichiers

task_manage.php : le code principal de l'application

taches.json : les tâches sauvegardées au format JSON

liste_taches.txt : export en texte lisible

liste_taches.html : export en version HTML imprimable

README.md : documentation de l'applicationPrérequis

PHP 7.x ou supérieur (compatible PHP 8)

🙌 Auteur

Projet réalisé par Mehdi