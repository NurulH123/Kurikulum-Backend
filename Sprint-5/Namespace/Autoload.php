<?php
//Kelemahan pake autoload yaitu tidak bisa pake namespace

// use Pendaftar\Register;

function __autoload($class) {
    require_once($class.".php");
}

$lihat = new Register;

