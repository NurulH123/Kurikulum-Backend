<?php 
class Perpustakaan

{
    public static  $namaBuku = 
    [

        [
            'judul'=>'Kamus Inggris Indonesia',
            'ISBN'=>'978-602-03-0564-6',
            'penerbit'=>'PT Gramedia Pustaka Utama',
            'jumlah'=>'5'
        ],
        [
            'judul'=>'fundamental of English Grammer',
            'ISBN'=>'0-13-231513-0',
            'penerbit'=>'Belum Diketahui',
            'jumlah'=>'7'
        ],
        [
            'judul'=>'Meaning in English',
            'ISBN'=>'0-58-202875-2',
            'penerbit'=>'Belum Diketahui',
            'jumlah'=>'3'
        ]
    ];

    public function __construct($nama) {
        $buku = self::$namaBuku;
        print_r($buku);
        

        function warning($key,$nama)  {
            if($key <0 || $key > 2) {
                throw new Exception('Nomor indeks tidak boleh kurang dari 0 atau lebih besar dari 3');
            }
        
            echo "Buku yang dipijam :"."\n\n";
            $diPinjam =Perpustakaan::$namaBuku[$key];
            echo "Judul    : ".$diPinjam['judul']."\n";
            echo "ISBN     : ".$diPinjam['ISBN']."\n";
            echo "Penerbit : ".$diPinjam['penerbit'];

            echo "\n\n";
            echo "Bagi peminjam yang bernama, $nama";
            echo "Batas waktu peminjaman sampai ".date("l, d-M-Y",time()+(60*60*24*3))."\n";
        }
        echo "Masukan nomor indeks buku (0-2):";
        $key =(int) fgets(STDIN);

        $result =null;
        
        try{
            warning($key,$nama);
       }catch(Exception $munculkan) {
           echo "Error pada ( ".__FILE__." ) baris ke-".$munculkan->getline()."\n";
           echo $munculkan->getMessage();
           echo "\n\n";https://github.com/NurulH123/Kurikulum-Backend/tree/master/Sprint-2/Topik-3
       }
        
        echo $result."\n";

    }

    
    
};
echo "Masukan nama :";
$nama =(string) fgets(STDIN);
New Perpustakaan($nama);

?>