<?php
//latihan 2

for($n=9;$n>=1;$n--) {
    for($m=1;$m<=9;$m++) {
        if($n<=$m) {
            echo "+";
        }else{
            echo " - " ."  ";
        }
    }
    echo "<br>";
}
echo "<br><br><br>";
?>