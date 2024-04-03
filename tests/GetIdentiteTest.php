<?php

use PHPUnit\Framework\TestCase;
require_once "src/fonctions.php";

class GetIdentiteTest extends TestCase {

    public function testGetIdentite_AvecPrenomEtNomEnMinuscules_IdentiteCorrecte () {
        // Arrange (contexte)
        $prenom = "jean";
        $nom = "dupont";
        // Act (exécution de la fonction à tester)
        $resultat=getIdentite($prenom, $nom);
        // Assert
        $this->assertEquals("Jean DUPONT", $resultat);
    }

    public function testGetIdentite_AvecPrenomEtNomEnMajuscules_IdentiteCorrecte () {
        // Arrange (contexte)
        $prenom = "JEAN";
        $nom = "DUPONT";
        // Act (exécution de la fonction à tester)
        $resultat=getIdentite($prenom, $nom);
        // Assert
        $this->assertEquals("Jean DUPONT", $resultat);
    }

    public function testGetIdentite_AvecPrenomEtNomMinusculesMajuscules_IdentiteCorrecte () {
        // Arrange (contexte)
        $prenom = "jEaN";
        $nom = "DupONt";
        // Act (exécution de la fonction à tester)
        $resultat=getIdentite($prenom, $nom);
        // Assert
        $this->assertEquals("Jean DUPONT", $resultat);
    }

    public function testGetIdentite_AvecPrenomEtNomNonRenseignés_ChaineVide () {
        // Arrange (contexte)
        $prenom = "";
        $nom = "";
        // Act (exécution de la fonction à tester)
        $resultat=getIdentite($prenom, $nom);
        // Assert
        $this->assertEquals("", $resultat);
    }

    public function testGetIdentite_AvecPrenomComposéTiretEtNomRenseignés_IdentiteCorrecte () {
        // Arrange (contexte)
        $prenom = "jean-charles";
        $nom = "dupont";
        // Act (exécution de la fonction à tester)
        $resultat=getIdentite($prenom, $nom);
        // Assert
        $this->assertEquals("Jean-Charles DUPONT", $resultat);
    }

    public function testGetIdentite_AvecPrenomComposéEspaceEtNomRenseignés_IdentiteCorrecte () {
        // Arrange (contexte)
        $prenom = "jean charles";
        $nom = "dupont";
        // Act (exécution de la fonction à tester)
        $resultat=getIdentite($prenom, $nom);
        // Assert
        $this->assertEquals("Jean-Charles DUPONT", $resultat);
    }
}