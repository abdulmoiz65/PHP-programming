<?php
// Combined array data
$array1 = ["abc", "abc@gmail.com"];
$array2 = [1, 23, 45, 65];

// Output for the first array
for ($i = 0; $i < count($array1); $i++) {
    echo $array1[$i] . " ";
}

echo "\n"; // Add a newline for separation

// Output for the second array
for ($i = 0; $i < count($array2); $i++) {
    echo $array2[$i] . " ";
}
?>
