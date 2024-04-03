<?php

require_once "src/fonctions.php";
use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Attributes\DataProvider;

class CalculerSommePairsTest extends TestCase
{

    public static function sommePairsProvider() : array {
        return [
            "[] 0" =>[[], 0],
            "[2,4,6] 12" =>[[2,4,6],12],
            "[3,9,13] 0" =>[[3,9,13],0],
            "[2,3,4,6,9,13] 12" =>[[2,3,4,6,9,13],12]
        ];
    }
    #[DataProvider('sommePairsProvider')]
    public function testCalculerSommePairs_SommeCorrecte($tableau, $resultatAttendu) {
        // Act
        $resultat = calculerSommePairs($tableau);
        // Assert
        $this->assertEquals($resultatAttendu, $resultat);
    }



}