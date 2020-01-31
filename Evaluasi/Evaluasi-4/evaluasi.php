<?php
class Nilai {
    protected $host="localhost",
              $username="Nurul Hidayat",
              $password="qwertyopu";

    function __construct()
    {
        $this->db=new PDO("mysql:host=$this->host;dbname=evaluasi4",$this->username,$this->password);
    }

    function insert() {
            echo "Jumlah siswa yang akan di tambah :";
            $tambah=(int)fgets(STDIN);
        for($i=1;$i<=$tambah;$i++) {
            echo "Masukan nama :";
            $nama =trim(fgets(STDIN));
            echo "Masukan nilai :";
            $nilai=trim(fgets(STDIN));
            $table ="insert into santri (nama,nilai) values ('$nama',$nilai)";
        }
        $show = $this->db->prepare($table);
        $show ->execute();
        $result=$show->fetchAll(pdo::FETCH_ASSOC);
        print_r($result);
        
    }
}

$konek =new Nilai();
// echo "Pilih aktifitas \n";
// echo "insert, update atau delete";
// $aktif=(string) fgets(STDIN);

$konek->insert();

?> 