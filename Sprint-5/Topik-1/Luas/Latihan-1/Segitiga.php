<?php

class Segitiga {
    function __construct($alas,$tinggi)
    {
        $luas = (($alas*$tinggi)/2);
        echo "alas = ".$alas."<br>";
        echo "tinggi = ".$tinggi."<br>";
        echo "Luas Segitiga = ".$luas."<br><br>";
    }

}