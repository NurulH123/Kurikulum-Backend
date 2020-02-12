<?php

function Penerimaan($class) {

    $file = "Penerimaan/{$class}.php";
    if(is_readable($file)) {
        require $file; 
    }
}

function Mahasiswa($class) {

    $file = "Penerimaan/{$class}.php";
    if(is_readable($file)) {
        require $file; 
    }
}
spl_autoload_register("Penerimaan");