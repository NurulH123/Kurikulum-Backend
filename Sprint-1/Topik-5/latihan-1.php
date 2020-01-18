<?php

$students =
[
    [
        'id'=>'IT-001',
        'name'=>'Ridwan',
        'division'=>'PHP Backend',
        'age'=>'25',
    ],
    [
        'id'=>'IT-010',
        'name'=>'Achmad',
        'division'=>'Java for Android',
        'age'=>'23',
    ],
    [
        'id'=>'IT-005',
        'name'=>'Yusuf',
        'division'=>'ReactJs',
        'age'=>'22',
    ],
    [
        'id'=>'IT-002',
        'name'=>'Arief',
        'division'=>'PHP Backend',
        'age'=>'21',
    ],
    [
        'id'=>'IT-004',
        'name'=>'Dayat',
        'division'=>'React Native',
        'age'=>'21',
    ],
    [
        'id'=>'IT-017',
        'name'=>'Lutfi',
        'division'=>'ReactJs',
        'age'=>'18',
    ],
];


function urutnama(array $students) {
    arsort($students);
    foreach($students as $key => $value) {
        if($students[$key]['divisi']>='PHP Backend') {
            print_r($value);
        }
    }
}

urutnama($students);
$nama=urutnama($students);
// ksort($nama);
// print_r($nama);

// arsort($nama);
print_($nama);
// ksort($nama);
// print_r($nama);

// function divisi(array $students) {
// foreach($students as $ke => $val) {
//     arsort($students);
//     if($tudents[$key]['division']=['PHP Backend']) {
//         print_r($val);
//     }
 
// }
// }

// $divisi=divisi($students);

// print_r($divisi);
?>