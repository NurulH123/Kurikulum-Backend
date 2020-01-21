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


// function urutId(array $students) {
//     arsort($students);
//     foreach($students as $key) {
//         print_r($key);
//     }
// }

// urutId($students);

// function division(array $students) {
//     asort($students);
//     foreach($students as $key => $value) {
//         if($value['division']=='PHP Backend')
//         print_r($value);
//     }
// }
// division($students);

// function urutAge(array $students) {
//     arsort($students);
//     foreach($students as $key => $value) {
//         if($value['age'] <'25') {
//             print_r($value);
//         }
        
//     }
// }
// urutAge($students);

function urutAge(array $students) {
    arsort($students);
    foreach($students as $study) {
        print_r($study);
        
    }
}
urutAge($students);
?>