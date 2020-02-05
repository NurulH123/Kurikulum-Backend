<?php 
   
class Penjualan {
    public $host = "localhost";
    public $username ="Nurul Hidayat";
    public $password ="qwertyopu";

    function __construct() {
        $this->conn=new PDO("mysql::host=$this->host;dbname=penjualan",$this->username,$this->password);
    }

    function lihatData() {
        $query = "SELECT * FROM barang";
        $show = $this->conn->prepare($query);
        $show->execute();
        $result = $show->fetchAll(pdo::FETCH_ASSOC);
        // print_r($result);
        return $result;
    }

    function insert($merk) {
        $query1 = "INSERT INTO barang (nama,merk,harga) VALUES ($merk)";
        $show = $this->conn->prepare($query1);
        $show->execute();
        $result = $show->fetchAll(pdo::FETCH_ASSOC);
        // return $this->lihatData();
        echo "Nama Merk : ".$merk;
    }

    function delete() {
        $query ="DELETE FROM barang WHERE nama=";
    }

}
$tambah =new Penjualan();
$tambah->lihatData();

?>
