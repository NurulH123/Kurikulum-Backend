<?php

echo "Masuka data angka :";
$data=(int) fgets(STDIN);

for($n=1;$n<=$data;$n++){
    echo "Data ke-$n :";
    $total[]=(int) fgets(STDIN);
}

sort($total)."\n";
// foreach($total as $key => $value) {
//     echo "Nilai data sekarang :" . $x ."=>" .$y ."\n";
// }

print_r($total);
echo max($total);
// echo "frekuensi :" .array_sum($total). "\n";
echo "mean :" . array_sum($total)/$data ."\n";
echo "median :" .$total[($data-1)/2] . "\n";
// print_r($total);
$mod=array_count_values($total);

print_r($mod);
echo "frkuensi :" .max($mod)."\n";

$tukar =array_flip($mod);
print_r($tukar);
for($i=0;$i<$data;$i++) {
    
}

?>