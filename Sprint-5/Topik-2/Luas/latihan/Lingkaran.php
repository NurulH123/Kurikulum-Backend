<?php
namespace Lingkaran;

class Lingkaran {
    function __construct($r)
    {
        $keliling = 2*3.14*($r);
        $luas = 3.14*($r)**2;
        // echo "jari-jari = ".$r ."<br>";
        echo "<p>Luas Lingkaran = ".$luas."</p>";
        echo "<br>";
        echo "<p>Keliling Lingkaran = ".$keliling."</p>";
    }
}
