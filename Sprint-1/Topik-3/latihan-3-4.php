<?php 

//Latihan 1

for($n=9;$n>=1;$n--) {
    for($m=9;$m>=1;$m--) {
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