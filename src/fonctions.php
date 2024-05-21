<?php

function getIdentite (string $prenom, string $nom) : string {
    if (empty($prenom) && empty($nom)) {
        return "";
    } else {
        return ucfirst(strtolower($prenom)) . ' ' . strtoupper($nom);
    }
}

// Fonction permettant de déterminer si une personne est majeur en fonction de son âge
function estMajeur (int $age) : bool {
    return $age >= 18 ;
}

function calculerSommePairs (array $tableau) : int {
    $somme = 0;
    if (empty($tableau)) {
        return $somme;
    }
    foreach ($tableau as $nombre) {
            if ($nombre % 2 == 0) {
                $somme += $nombre;
            }
        } return $somme;
}

function calculerTarifAge (string $age) : string {
    if (empty($age)) {
        return "Vous n'avez pas indiqué votre âge";
    } elseif ($age<18 && $age>0) {
        return "Tarif réduit";
    } elseif ($age>65) {
        return "Tarif senior";
    } elseif ($age<0) {
        return "Âge incorrect";
    } else {
        return "Tarif plein";
    }
}

function transformerPhrase (string $phrase) : string {

    if (empty($phrase)) {
        return "";
    }
    $mots = explode(" ", $phrase);


}

