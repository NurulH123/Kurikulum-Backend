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

//A. Daftar santri berdasar nomor induk
// function urutId(array $students) {
//     arsort($students);
//     foreach($students as $key) {
//         print_r($key);
//     }
// }

// urutId($students);

//B.Daftar santri berdasar nama
function urutId(array $students) {
    asort($students);
    foreach($students as $key=>$value) {
        print_r($value['name']);
    }
}
    
    urutId($students);

//C. Daftar santri yang minat PHP Backend
// function division(array $students) {
//     asort($students);
//     foreach($students as $key => $value) {
//         if($value['division']=='PHP Backend')
//         print_r($value);
//     }
// }
// division($students);

// D. Jumlah santri berusia kurang dari 25 tahun
// function jmlAge( $students) {
//     arsort($students);
//     foreach($students as $key => $value) {
//         if($value['age'] <'25') {
//             // print_r($value);
//             $santri25[]=$value;
//             print_r($santri25);
//             echo "Jumlah santri berusia kurang dari 25 adalah ".count($santri25)." orang"."\n";
//         }
        
//     }
// }

// jmlAge($students);

// E. Rerata usia santri
// function rataUsia(array $students) {
//     arsort($students);
//     for($i=0;$i<count($students);$i++) {
//         $usia []= $students[$i]['age']."\n";
//         print_r($usia);
        // echo array_sum($usia)/count($usia)."\n";

//     }
// }
// rataUsia($students);

//F. Santri paling muda
// function rataUsia(array $students) {
//     arsort($students);
//     foreach($students as $key => $value) {
//         // $usia []= $students[$key]['age']."\n";
//         if($value['age']=='18') {
//             echo "Santri termuda adalah :\n\n";
//             echo "Nama   = ".$value['name']."\n";
//             echo "ID     = ".$value['id']."\n";
//             echo "Divisi = ".$value['division']."\n";
//             echo "Age    = ".$value['age']."\n";
//         }
//     }
// }       
// rataUsia($students);
?>