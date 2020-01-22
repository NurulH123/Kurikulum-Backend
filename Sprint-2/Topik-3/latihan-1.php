<?php
// function numberDivision(int $devidend, int $divisor) : float {
//     if($divisor === 0) {
//         echo 'Pembagi tidak boleh sama dengan 0';
       
//     };

//     $quotient = $devidend / $divisor;
//     return $quotient;
// }

// numberDivision(5, 3);
// numberDivision(5, 0);


function numberDivision(int $devidend, int $divisor): float {
    if($divisor === 0) {
        throw new Exception('Pembagi tidak boleh 0');
    }

    $quotient = $devidend / $divisor;
    return $quotient;
}

$result =null;

try{
    $result = numberDivision(5,0);
}catch (Exception $e) {
    echo "Error pada".__FILE__."baris ke : ".$e->getline()."\n";
    echo $e->getMessage();
}

echo $result."\n";


?>