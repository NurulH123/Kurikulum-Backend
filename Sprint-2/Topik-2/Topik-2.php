<?php

class hitung
{ 
    static protected $rumus = 
    [
        [
            'luas persegi panjang','luas lingkaran','luas trapesium'
        ],
        [
            'keliling persegi','keliling lingkaran','keliling trapesium'
        ],
        3.14
    ];
    
    public static function persegi($panjang,$tinggi) {
        $myAngka =self::$rumus;
        echo $myAngka[0][0] ." ". $panjang*$tinggi."\n";
        echo $myAngka[1][0]." ".(2*($panjang+$tinggi)."\n\n");
    }

    public static function lingkaran($radius) {
        $angka =self::$rumus;
        echo $angka[0][1] ." ". ($angka[2]*($radius)**2) ;
        echo "\n";
        echo $angka[1][1] ." ". (2*$angka[2]*$radius)."\n\n";
    }

    public static function trapesium($sejajar1,$sejajar2,$miring,$tinggi) {
        $myRumus =self::$rumus;
        echo $myRumus[0][2] ." ". (1/2*($sejajar1+$sejajar2)*$tinggi)."\n";
        echo $myRumus[1][2] ." ".($sejajar1+$sejajar2+$miring+$tinggi);
    }
}


$panjang = 6;
$tinggi = 8;
$radius = 4;
$sejajar1 = 5;
$sejajar2 = 10;
$miring = 3;

hitung::persegi($panjang,$tinggi);
hitung::lingkaran($radius);
hitung::trapesium($sejajar1,$sejajar2,$miring,$tinggi);
?>

