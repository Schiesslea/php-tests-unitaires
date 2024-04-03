<?php

require_once "src/fonctions.php";
use PHPUnit\Framework\TestCase;

class EstMajeurTest extends TestCase {

    public function testEstMajeur_AgeSuperieurEgal18_Vrai() {
        // Arrange
        $age = 19;
        // Act
        $resultat = estMajeur($age);
        // Assert
        $this->assertTrue($resultat);
    }

    public function testEstMajeur_AgeInferieur18_Vrai() {
        // Arrange
        $age = 15;
        // Act
        $resultat = estMajeur($age);
        // Assert
        $this->assertFalse($resultat);
    }
}