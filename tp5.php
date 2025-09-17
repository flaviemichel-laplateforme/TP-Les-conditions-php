<?php
//5. 🚀 TP PHP (match)

/*$destination = "La Seyne";

$message = match ($destination) {
    "Les Sablettes" => "Départ toutes les 30 minutes.",
    "La Seyne" => "Départ toutes les 20 minutes depuis Toulon.",
    "St Mandrier" => "Dernier départ à 22h.",
    default => "Destination inconnue.",
};

echo $message;*/

$resultat = "victoire";
$message = match ($resultat) {
    "victoire" => "Victoire à Mayol !",
    "egalite" => "Match nul, à travailler",
    "defaite" => "Défaite, mais Toulon reste fort !",
    default => "Résultat inconnu.",
};

echo $message;


