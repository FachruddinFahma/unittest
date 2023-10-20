<?php

// Path to run ./vendor/bin/phpunit --bootstrap vendor/autoload.php FileName.php
// Butuh Framework PHPUnit
use PHPUnit\Framework\TestCase;

// Class yang mau di TEST.
require_once "wordcount.php";


// Class untuk run Testing.
class SimpleTest extends TestCase
{
    public function testcountwords()
    {
        // Kita pakai class yang mau kita test
        $Wc= new wordcount();

        // Kita masukkan parameter 4 kata, yang harusnya dapat output 4
        $TestSentenoe = "My name is Joko"; // 4 kata
        $WordCount = $Wc->countwords($TestSentenoe);

        // Kita assert equal, ekspetasi nya harus 4, jika benar berarti wordcount berfungsi dengan baik
        $this->assertEquals(4, $WordCount);
    }
}
?>