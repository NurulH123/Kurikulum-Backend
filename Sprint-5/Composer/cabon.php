<?php 

require_once __DIR__.'/vendor/autoload.php';

use Carbon\Carbon;
use Composer\ConnectPdo;
use Carbon\CarbonImmutable;

    echo Carbon::now();
    echo "<br>";
    echo date('H:i:s l, d-M-Y',time()+86400);
    
    echo "<br>";
    $mutable =Carbon::now();
    $imutable =CarbonImmutable::now();
    $modifieldMuable =$Mutable->add(1,'day');
    $mutableImmutable =CarbonImmutable::now()->add(1,'day');

?>