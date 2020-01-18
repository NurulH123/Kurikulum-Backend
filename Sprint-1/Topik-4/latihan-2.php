<?php 


// for($i=0;$i<3;$i++) {
//     $datKonvers=array_count_values($total);
//     print_r($datKonvers);
//     rsort($total);
//     print_r($total);
    
//     $unq=array_unique($datKonvers);
//     echo "Hightest ke-$i=" . $total[$i]. "\n";
   
// }
echo "Banyak data :";
$data=(int) fgets(STDIN);

for($n=1;$n<=$data;$n++){
    echo "Data ke-$n :";
    $total[]=(int) fgets(STDIN);
}
// $total=[5,9,6,7,9,8,10,7,8];
echo "\n";

$unq =array_unique($total);
$revers =array_reverse($unq);
$slice=array_slice($revers,0,3);

foreach($slice as $key => $value) {
    echo "Hightest adalah :" . $value."\n";
}
echo "\n\n";

sort($total);
$revers1 =array_unique($total);
$slice=array_slice($revers1,0,3);
foreach($slice as $key => $value) {
    echo "Lowest adalah :".$value."\n";
}

?>