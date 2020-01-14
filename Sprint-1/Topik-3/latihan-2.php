<?php 

for($n=9;$n>=0;$n--) {
    if($n % 2==0 || $n==9 ) {
        continue;
    }else{
        echo $n ." ";
    }
}



?>