<?php
namespace Segitiga;

class Segitiga {
    function __construct($alas,$tinggi,$miring)
    {
        $luas = (($alas*$tinggi)/2);
        $keliling =$alas+(2*$miring);
        echo "<p>Keliling Segitiga = ".$keliling."</p>"; 
        echo "<p>Luas Segitiga = ".$luas."</p>";
    }

}
