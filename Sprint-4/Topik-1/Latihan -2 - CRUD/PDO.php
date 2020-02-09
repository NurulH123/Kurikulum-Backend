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
        return $result;
    }

    function insert($nama,$merk,$harga) {
        $query = "INSERT INTO barang (nama,merk,harga) VALUES ('$nama','$merk',$harga)";
        $show = $this->conn->prepare($query);
        $show->execute();
        $result = $show->fetchAll(pdo::FETCH_ASSOC);
        return $this->lihatData();
        // echo "Nama Merk : ".$merk;
    }

    function delete($id) {
        $query ="DELETE FROM barang WHERE id=$id";
        $show =$this->conn->prepare($query);
        $show->execute();
        $result =$show->fetchAll(pdo::FETCH_ASSOC); 
        return $show;
    }

    function edit($kode) {
        $query ="SELECT * FROM barang WHERE id=$kode";
        $show =$this->conn->prepare($query);
        $show->execute();
        $result =$show->fetch(pdo::FETCH_OBJ); 
        return $result;
    }

    function update($nama,$merk,$harga,$kode) {
        $query ="UPDATE barang SET nama='$nama',  merk='$merk',  harga='$harga' WHERE id=$kode";
        $show =$this->conn->prepare($query);
        $show->execute();
        return $show;
    }

}
$tambah =new Penjualan();
$tambah->lihatData();
?>
