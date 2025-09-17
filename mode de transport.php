<?php

$transport = "bus";

switch ($transport) {
    case "bus":
        echo "Le transport est un bus.";
        break;
    case "bateau":
        echo "Le transport est un bateau.";
        break;
    default:
        echo "Transport inconnu.";
}