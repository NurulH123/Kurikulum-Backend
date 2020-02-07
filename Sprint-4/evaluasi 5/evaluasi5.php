<?php 
class Admin {
    public $host ="localhost";
    public $username ="Nurul Hidayat";
    public $password ="qwertyopu";

    function __construct()
    {
        $this->conn =new PDO("mysql::host=$this->host;dbname=admin",$this->username,$this->password);
    }

    function lihatData() {
        $query ="SELECT * FROM santri";
        $show =$this->conn->prepare($query);
        $show->execute();
        $result =$show->fetchAll(pdo::FETCH_ASSOC);
        echo "hallo";
    }

    // function insert($nama,$div,$alamat) {
    //     $query ="INSERT INTO santri (nama,divisi,alamat) VALUES ('$nama','$div','$alamat')";
    //     $show =$this->conn->prepare($query);
    //     $show->execute();
    //     $result =$show->fetchAll(pdo::FETCH_ASSOC);
    //     return $this->lihatData();
    // }

    // function delete() {
    //     $query ="DELETE FROM santri WHERE   nama=$nama";
    //     $show =$this->conn->prepare($query);
    //     $show->execute();
    //     $result =$show->fetchAll(pdo::FETCH_ASSOC);
    //     return $result;
    // }

    // function update() {
    //     $query ="UPDATE santri SET nama='$nama', divisi='$div', alamat='$alamat' WHERE id=$id";
    //     $show =$this->conn->prepare($query);
    //     $show->execute();
    //     $result =$show->fetchAll(pdo::FETCH_ASSOC);
    //     return $result;
    // }
    
}

$tambah =new Admin;

?>