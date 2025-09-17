<?php

//Crée une variable $transport avec la valeur "Bus" ou "Bateau".
$transport = "Bateau";

switch ($transport) {
    case "Bus":
        echo "Tu prends le bus, pense à ton ticket !";
        break;
    case "Bateau":
        echo "Tu prends le bateau, profite de la vue sur la rade de Toulon !";
        break;
    default:
        echo "Moyen de transport non reconnu.";
}
        
