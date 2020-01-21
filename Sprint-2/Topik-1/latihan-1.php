<?php

class PinjamBuku 
{
    protected $buku =
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

    
    public function book($keyOut,$nama,$nim,$jurusan) {
        echo "Daftar buku yang tersedia :"."\n";
        $bukuIn =$this->buku;
        print_r($bukuIn);
        echo "\n\n\n";
    
    //Identitas peminjam
        echo "Identitas peminjam :"."\n\n";
        echo "Nama    : ".$nama;
        echo "NIM     : " .$nim."\n";
        echo "Jurusan : ".$jurusan."\n";

    //Definisi buku yang dipinjam
        echo "Batas pengembalian :".date("l, d-M-Y",time()+(60*60*24*3))."\n\n";
        echo "Buku yang dipinjam :"."\n";
        $myBook = $this->buku[$keyOut];
        // print_r($myBook);
        echo "\n";
        echo "Judul    : " .$myBook['judul']."\n";
        echo "ISBN     : " .$myBook['ISBN']."\n";
        echo "Penerbit : " .$myBook['penerbit']."\n";
        echo "\n";

    //Buku setelah dipinjam

        echo "Jumlah buku yang dipinjam :";
        $jmlPinjam =(int) fgets(STDIN);
        echo "Jumlah buku sekarang :";
        $jml =$bukuIn[$keyOut]['jumlah'];
        $now =$jml - $jmlPinjam;
        print_r($now);
        echo "\n\n\n";

    //Waktu pengembalian
        echo "Apakah anda akan mengembalikan buku? \n";
        echo "Jumlah buku yang dikembalikan :";
        $jmlKembali=(int) fgets(STDIN);
        echo "\n";
        echo "Identitas pengembali :"."\n\n";
        echo "Nama    : ".$nama;
        echo "NIM     : " .$nim."\n";
        echo "Jurusan : ".$jurusan."\n";
        echo "Buku yang dikembalikan :\n\n";
        echo "Judul    : " .$myBook['judul']."\n";
        echo "ISBN     : " .$myBook['ISBN']."\n";
        echo "Penerbit : " .$myBook['penerbit']."\n";
        echo "\n\n";
        echo "Jumlah buku setelah dikembalikan :";
        echo $now + $jmlKembali ."\n";
    
    }

    
        
        
};


//Identitas peminjam
echo "Masukan nama :";
$nama =(string) fgets(STDIN);
echo "Nomor Induk Mahasiswa :";
$nim =(int) fgets(STDIN);
echo "Jurusan :";
$jurusan =(string) fgets(STDIN);

//Buku yang dipinjam
$pinjam = New PinjamBuku;

echo "Masukan nomor indeks buku(0-2) :";
$keyOut = (int) fgets(STDIN);
// echo "Jumlah buku yang dipinjam :";
// $jmlPinjam =(int) fgets(STDIN)."\n\n";

$pinjam->book($keyOut,$nama,$nim,$jurusan);
// $pinjam->kembali($keyOut,$nama,$nim,$jurusan,$panggil);

?>