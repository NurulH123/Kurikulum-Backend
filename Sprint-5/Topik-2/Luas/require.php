<?php
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

// require_once('latihan-1/Lingkaran.php');
// require_once('Latihan-1/Persegi.php');
// require_once('Latihan-1/Segitiga.php');
namespace Panggil;

function Autoload($class) {
    require_once(__DIR__.'/latihan/'.$class.'.php');
}

spl_autoload_register("Autoload");
?>
