<?php

require_once 'src/fonctions.php';

$prenom = "JeAn";
$nom = "duPoNt";
$identite = getIdentite($prenom, $nom);
echo $identite;