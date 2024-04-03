<?php

require_once 'src/fonctions.php';

$prenom = "JEAN";
$nom = "DUPONT";
$identite = getIdentite($prenom, $nom);
echo $identite;