<?php

class Hitung
{ 
    public function __construct($sejajar1,$sejajar2,$miring,$lebar) {
        
        echo "luas trapesium = ". (1/2*($sejajar1+$sejajar2)*$lebar)."\n";
        echo "keliling trapesium = ".($sejajar1+$sejajar2+$miring+$lebar)."\n\n";
    }
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
        echo $angka[1][1] ." ". (2*$angka[2]*$radius);
    }
}
        
function warning(int $acces, int $trouble): float {
    if($trouble < 0) {
        throw new Exception('Angka tidak boleh kurang dari 0');
            echo "\n";
         $masuk =$acces * $trouble;
         return $masuk;
    }
}
    echo "Masukkan nilai panjang :";
    $panjang = (int) fgets(STDIN);
    echo "\n"."Masukkan nilai lebar :";
    $tinggi = (int) fgets(STDIN);

    $result =null;

try{
    $result = warning($panjang,$tinggi);
}catch(Exception $nol) {
    echo "Error".__FILE__."baris ke-".$nol->getline()."\n";
    echo $nol->getMessage();
    $jalan = New Hitung($panjang,$lebar,4,3);
}



$radius = 4;
$sejajar1 = 5;
$sejajar2 = 10;
$miring = 3;
$panjang = 7;
$tinggi = 4;

new Hitung($sejajar1,$sejajar2,$miring,$tinggi);
Hitung::persegi($panjang,$tinggi);
Hitung::lingkaran($radius);

?>