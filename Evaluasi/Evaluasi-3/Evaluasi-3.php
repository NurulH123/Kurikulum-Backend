<?php

class Register 

{
    public function __construct($siswa,$nama,$nik) {
        echo "\n";
        
            for($i=1;$i<=$siswa;$i++) {
                $dataSiswa[]=['nama'=>$nama,'nik'=>$nik]
            }
            
        
        
        print_r($dataSiswa);
    }
    
    public static function pemangilan($reg1,$siswa,$nama,$nik) {
        // $reg2 = $reg1 ;
        // for($i=1;$i<=$siswa;$i++){
        //     $dataSiswa[]=['nama'=>$nama,'nik'=>$nik];
        // }
        // print_r($dataSiswa);
        

        // echo "Cek daftar nama siswa "."\n\n";
        // echo "Masukan nomor indeks (0-".$siswa.")\n";
        // $identitas = $dataSiswa[$siswa];
        // print_r($identitas);


        
    }
    

   
}

//Pendaftaran
echo "Jumlah pendaftar :";
$siswa = (int) fgets(STDIN);

for($i=1;$i<=$siswa;$i++) {
    echo "Nama pendaftar ke- $i :"."\n";
    $nama =(string) fgets(STDIN);
    echo "NIk :";
    $nik =(int) fgets(STDIN);
}
$reg1=New Register($siswa,$nama,$nik);

$reg1::pemangilan($reg1,$siswa,$nama,$nik);


?>