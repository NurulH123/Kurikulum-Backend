<?php
class Data {
    protected $host="localhost",
              $username="Nurul Hidayat",
              $password="qwertyopu";

    function __construct()
    {
        $this->conn=new PDO("mysql:host=$this->host;dbname=evaluasi4",$this->username,$this->password);
    }

    function insert($nama,$nilai) {
        $quer ="INSERT INTO siswa (nama,nilai) VALUES ('$nama',$nilai)";
        $res = $this->conn->prepare($quer);
        $res->execute();
        $query = "SELECT * FROM siswa";
        $show =$this->conn->prepare($query);
        $show->execute();
        $result =$show->fetchAll(pdo::FETCH_ASSOC);
        print_r($result);
    }
}

$data =new Data();
echo "Mau Insert,Update atau Delete ?";
$akt=trim(fgets(STDIN));
if(isset($akt)) {
    if($akt == "Insert" || $akt=="insert" || $akt =="INSERT") {
        echo "Jumlah siswa yg diinput :";
        $jml = trim(fgets(STDIN));
        for($i=1;$i<=$jml;$i++) {
            echo "Masukan nama :";
            $nama =trim(fgets(STDIN));
            echo "Masukan nilai :";
            $nilai =trim(fgets(STDIN));
        }
        
        $data->insert($nama,$nilai);
    }
}

?> 