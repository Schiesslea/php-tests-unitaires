<?php

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;
require_once "src/fonctions.php";

class GetIdentite2Test extends TestCase {

    // Créer un "Provider" de données

   public static function identiteProvider() : array {
        return [
            "jean dupont" =>["jean", "dupont", "Jean DUPONT"],
            "JEAN DUPONT" =>["JEAN", "DUPONT", "Jean DUPONT"],
            "JEaN DuPonT" =>["JEaN", "DuPonT", "Jean DUPONT"]
        ];
    }

    #[DataProvider('identiteProvider')]
    public function testGetIdentite_PrenomEtNomRenseignes_IdentiteCorrecte($prenom, $nom, $resultatAttendu) {
       // Act
        $resultat = getIdentite($prenom, $nom);
        // Assert
        $this->assertEquals($resultatAttendu, $resultat);
    }
}