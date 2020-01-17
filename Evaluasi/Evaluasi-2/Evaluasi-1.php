<?php

$students =array('IT-OO1' =>'Ridwan','IT-010'=>'Achmad', 'IT-005'=>'Yusuf','IT-002'=>'Arief','IT-004'=>'Dayat','IT-017'=>'Lutfi');

ksort($students). "\n";
print_r($students);
arsort($students) ."\n";
print_r($students);


?>