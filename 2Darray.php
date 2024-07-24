<?php

$array = [
    [1,23,34,56,78],
    [1,23,34,56,78],
    [1,23,34,56,78],
    [1,23,34,56,78],
];

foreach($array as $i){
    foreach($i as $j){
        echo  $j ." ";
    }
echo"\n";
}

?>