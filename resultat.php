<?php

$resultat = (false);

$message = match ($resultat) {
    true => "Victoire !",
    false => "Défaite !",
    null => "Match nul !",
};

echo $message;