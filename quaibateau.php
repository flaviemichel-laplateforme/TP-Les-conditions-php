<?php
/*Quai bateau-bus Mistral (switch)
Avec $destination parmi "Les Sablettes", "La Seyne", "St Mandrier", affiche le quai 
correspondant (1, 2, 3). Utilise <switch class=""></switch>
*/
$destination = "Les Sablettes";

switch ($destination) {
    case "Les Sablettes":
        echo "quai 1 <br />";
        break;
    case "La Seyne":
        echo "quai 2 <br />";
        break;
    case "St Mandrier":
        echo "quai 3 <br />";
        break;
    default:
        echo "destination inconnue <br />";
        break;  
}

echo "$destination <br />";
?>