<?php

require_once "src/fonctions.php";
use PHPUnit\Framework\TestCase;

class CalculerTarifAgeTest extends TestCase
{

    public function testCalculerTarifAge_AgeNonRenseigné_ChaineVide()
    {
        // Arrange
        $age = "";
        // Act
        $resultat = calculerTarifAge($age);
        // Assert
        $this->assertEquals("Vous n'avez pas indiqué votre âge", $resultat);
    }

    public function testCalculerTarifAge_AgeMoins18_TarifReduit()
    {
        // Arrange
        $age = "15";
        // Act
        $resultat = calculerTarifAge($age);
        // Assert
        $this->assertEquals("Tarif réduit", $resultat);
    }

    public function testCalculerTarifAge_AgeEntre18Et65_TarifPlein()
    {
        // Arrange
        $age = "18";
        // Act
        $resultat = calculerTarifAge($age);
        // Assert
        $this->assertEquals("Tarif plein", $resultat);
    }

    public function testCalculerTarifAge_AgeSuperieur65_TarifSenior()
    {
        // Arrange
        $age = "100";
        // Act
        $resultat = calculerTarifAge($age);
        // Assert
        $this->assertEquals("Tarif senior", $resultat);
    }

    public function testCalculerTarifAge_AgeNegatif_AgeIncorrect()
    {
        // Arrange
        $age = "-10";
        // Act
        $resultat = calculerTarifAge($age);
        // Assert
        $this->assertEquals("Âge incorrect", $resultat);
    }
}