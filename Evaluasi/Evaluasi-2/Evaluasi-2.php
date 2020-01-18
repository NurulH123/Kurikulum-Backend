<?php 

function countTriangle($base,$height) {
    echo "luas segitiga= " . 1/2 * $base * $height."\n";
    echo "<br>";
   //  echo "keliling =" . (sqrt(2)((1/2*$base)**2+$height**2))+$base+$height; 
}
 echo countTriangle(4,8)."\n";
echo "<br>";

 function countRectangle($width,$height) {
    echo "Luas persegi=" . ($width + $height). "\n";
    echo "<br>";
    echo "Keliling persegi=" . (2*($width+$height)) . "\n";
 }
echo countRectangle(6,8)."\n";
echo "<br>";

 function countCircle($radius,$diameter) {
    echo "Luas lingkaran=" . 3.14*(1/2*$diameter)**2;
    echo "<br>";
    echo "Keliling lingkaran=" . 2*3.14*$radius;
 }
 echo countCircle(6,8)."\n";
 echo "<br>";
?>