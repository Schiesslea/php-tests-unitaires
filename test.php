<?php

require_once 'src/fonctions.php';

$prenom = "jean";
$nom = "dupont";
$identite = getIdentite($prenom, $nom);
echo $identite;