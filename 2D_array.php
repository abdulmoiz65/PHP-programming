<?php
$det = [

    // "abdul moiz" , "moiz@gmail.com" , 19 , "karachi" 
    ["abdul moiz" , "moiz@gmail.com" , 19 , "karachi" ],
    ["Malik abdullah" , "abdullah@gmail.com" , 20 , "islamabad" ],
    ["Muhammad Ali" , "ali@gmail.com" , 18 , "lahore" ]
];
    for($i=0 ; $i<count($det) ; $i++){
            for($j=0;$j<count($det[$i]);$j++){
                    echo $det[$i][$j]. " ";
            }
            echo "<br>";
    }