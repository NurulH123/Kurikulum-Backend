<?php

class GeraiMiAyam
{
    //function bawaan
    public function __construct($a) {
        echo "contoh text".$a;
    }

    static protected $ingredients = [
        'mi','sawi','ayam','garam','rempah'
    ];

    public static function order($level) {
        $miAyam = self::$ingredients;
        print_r($miAyam);
        echo "Mi Ayam " .$level."\n";
    }
}

GeraiMiAyam::order('level 15');
?>