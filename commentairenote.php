<?php


$note = 9;

$message = match (true) {
    $note >= 16 => "Excellent travail à Toulon !",
    $note >= 10 => "Assez bien, continue !",
    default => "À améliorer !",
};

echo $message;





