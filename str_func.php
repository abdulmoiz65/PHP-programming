<?php

$para="hello i am moiz , and i am the student of aptech sfc";
$changes= str_replace('aptech','maju',$para);
echo $changes . "<br>";


$words = ucwords($para);
echo $words."<br>";


$count = str_word_count($para);
echo $count."<br>";


$reverse = "abdul moiz";
$rev = strrev($reverse);
echo $rev ."<br>";


$lenght = strlen($para);
echo $lenght . "<br>";

$position = "shahrah e faisal karachi";
$findposition = strpos($position,"karachi");
echo $findposition;


?>