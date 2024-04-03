<?php

require_once "src/fonctions.php";
use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Attributes\DataProvider;

class TransformerPhraseTest extends TestCase
{

    public static function transformerPhraseProvider(): array
    {
        return [
            "" => ["", ""],
            "Le singe" => ["Le singe", "Led singed"]
        ];
    }
    #[DataProvider('transformerPhraseProvider')]
    public function testTransformerPhrase_PhraseTransforme($phrase, $resultatAttendu) {
        // Act
        $resultat = transformerPhrase($phrase);
        // Assert
        $this->assertEquals($resultatAttendu, $resultat);
    }
}