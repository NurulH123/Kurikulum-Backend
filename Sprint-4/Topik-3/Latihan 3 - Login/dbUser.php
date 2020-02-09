<?php

class User{
    public $host ="localhost";
    public $username ="Nurul Hidayat";
    public $password ="qwertyopu";


    function __construct()
    {
        $this->data= new PDO("mysql::host=$this->host;dbname=user",$this->username,$this->password);
    }

    function masuk($nama) {
        $query = "SELECT * FROM masuk WHERE nama='$nama'";
        $show = $this->data->prepare($query);
        $show->execute();
        $result = $show->fetchAll(pdo::FETCH_ASSOC);
        return $result;
    }
    
}

$data =new User();

?>