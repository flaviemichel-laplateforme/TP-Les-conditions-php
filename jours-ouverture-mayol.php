<?php

// jour ouverture mayol

$jour = "dimanche";

switch ($jour) {
    case "lundi":
    case "mardi":
    case "mercredi":
    case "jeudi":
    case "vendredi":
        echo "Ouvert 10h - 19h ";
        break;
    case "samedi":
        echo "Ouvert 10h - 20h ";
        break;
    case "dimanche":
        echo "Fermé ";
        break;
}

echo "$jour <br />";