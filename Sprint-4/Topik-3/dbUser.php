<?php

class User{
    public $host ="localhost";
    public $username ="Nurul Hidayat";
    public $password ="qwertyopu";


    function __construct()
    {
        $this->db = new PDO("mysql::host=$this->host;dbname=user",$this->username,$this->password);
    }

    function show() {
        $query = 
    }
}
?>