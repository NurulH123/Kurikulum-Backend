<?php

// for($n=4;$n>=-4;$n--) {
//     for($m=4;$m>=-4;$m--) {
        
//             echo abs($m % 5) . abs($n % 5) . " ";
        
//     }
//     echo "<br>";
// }

// echo "<br><br><br>";

for($n=9;$n>=1;$n--) {
    for($m=9;$m>=1;$m--) {
        if($n==$m || $n + $m==10 ) {
            echo "  + ";
        }else{
            echo "(" .$n .$m .")";
        }
    }
    echo "<br>";
}
echo "<br><br><br>";

// for($n=9;$n>=1;$n--) {
//     for($m=9;$m>=1;$m--) {
//         if($n>=$m ||$n+$m<=10) {
//             echo "+";
//         }else{
//             echo " - " ."  ";
//         }
//     }
//     echo "<br>";
// }
// echo "<br><br><br>";
//latihan 3

for($n=9;$n>=1;$n--) {
    for($m=9;$m>=1;$m--) {
        if($n==$m || $n+$m==10 || $n+$m<10 && $m>$n ||$n+$m>10 && $m < $n) {
            echo "+";
        }else{
            echo " - " ."  ";
        }
    }
    echo "<br>";
}
echo "<br><br><br>";
?>