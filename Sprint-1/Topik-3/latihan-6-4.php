<?php
//latihan bonus

for($n=9;$n>=1;$n--) {
    for($m=1;$m<=9;$m++) {
        if($n==9 || $n==5 || $n==1 || $m==1 && $n>=5 || $m==9 && $n!=8 && $n!=7 && $n!=6) {
            echo "+";
        }else{
            echo " - " ."  ";
        }
    }
    echo "<br>";
}
?>