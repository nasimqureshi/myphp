<?php
// // 10 times Nasim Qureshi
// $i = 0;

// while($i < 10){
//     echo "Nasim Qureshi<br/>";
//     $i++;
// }
// echo "Loops ends"

// for($i = 100; $i < 0; $i--){
//     echo $i."<br />";
// }
//  echo "Loops ends";

// $i = 0;
// while($i < 10 ){
//     echo $i."<br />";
    
//     $i++;
// }

// For Each Loop
$arr = [
    "Nasim" => 69,
    "Qamar" => 66,
    "Samreen" => 42,
    "Hira" => 39,
];
// echo "<pre>";
// print_r($arr);
// echo "</pre>";

foreach ($arr as $name => $age){
    echo "The $name year old is $age<br/>";
}


?>