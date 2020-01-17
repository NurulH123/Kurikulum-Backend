<?php 

function countTriangle($base,$height) {
    echo "luas = " . 1/2 * $base * $height."\n";
    echo "keliling =" . (sqrt(2)((1/2*$base)**2+$height**2))+$base+$height; 
}
 echo countTriangle(4,8)."\n";


 function countRectangle($width,$height) {
    echo "Luas =" . $width+$height."\n";
    echo "Keliling =" . 2*($width+$height)."\n";
 }
echo countRectangle(4,8)."\n";


 function countCircle($radius,$diameter) {
    echo "Luas =" . 3.14*(1/2*$diameter)**2;
    echo "Keliling =" . 2*3.14*$radius;
 }
 echo countCircle(4,8)."\n";
?>