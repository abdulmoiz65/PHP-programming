<?php 
$array = [
   ["name_1" => "moiz"],
   ["name_2" => "ali"],
   ["name_3" => "Muhammad"],
];


foreach($array as $key => $value){
    foreach($value as $key2 => $value2){
        echo $value2;
    }
    echo "<br>";
}
?>