<?php

echo "Masuka data angka :";
$data=(int) fgets(STDIN);

for($n=1;$n<=$data;$n++){
    echo "Data ke-$n :";
    $total[]=(int) fgets(STDIN);
}
sort($total)."\n";

echo "Mean data adalah " . array_sum($total)/$data ."\n";
echo "Median data adalah " .$total[($data-1)/2] . "\n";

$mod=array_count_values($total);


foreach($mod as $key => $value) {
   if($value == max($mod)) {
      echo "Modus data adalah ". $key.", frekuensinya ".$value."\n";
   }
}

?>