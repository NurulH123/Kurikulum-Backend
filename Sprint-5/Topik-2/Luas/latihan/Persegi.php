<?php
namespace Persegi;

class Persegi {
    function __construct($sisi)
    {
        
        $luas =$sisi**2;
        echo "<p>Keliling Persegi = ". 4*$sisi."</p>";
        echo "<br>";
        echo "<p>Luas Persegi = ".$luas."</p>";
    }
}
