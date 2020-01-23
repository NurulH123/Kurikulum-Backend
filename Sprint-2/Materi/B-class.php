<?php

class GeraiMiAyam
{
    // Bahan masakan penyusun mi ayam
    // @var array

    protected $ingredients = [
        ['mi','sawi'],['ayam','garam','rempah']
    ];


    // Terima pesanan dari pembeli
    // @return MiAyam


    public function order($level)
    {
        $miAyam = $this->ingredients[1][2]."\n";
        print_r($miAyam);
        echo " Mi Ayam " . $level ."\n";
        // mi ayam = $this->cook();
        // return $miAyam;

    }

    // masak mi ayam

    // @return MiAyam

    protected function cook() : MiAyam
    {
        // rebus bahan - bahan
        
        $miAyam = boil($ingredients);

        return $miAyam;
    }
}


class GeraiMiAyamBakso extends GeraiMiAyam 
{
    protected $topping = ['bakso'];

    public function applyTopping()
    {
        $miAyam = $this->ingredients;
        return $miAyam;
    }
}  

$level = 'bakso level 1';
$geraimiayam = New GeraiMiAyam;

// cara pemangilan
$geraimiayam->order($level);

print_r($geraimiayam);
?>