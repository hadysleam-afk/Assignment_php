<?php

$tests = array(1, "tariq", 1.5, true, 7, 's', false); 
$count = count($tests);

echo "--- For Loop ---<br>";
for ($i = 0; $i < $count; $i++) {
    $item = $tests[$i];

    if (is_bool($item)) {
    
        echo ($item ? "Yes" : "NO") . "<br>"; 
    } else {

        echo $item . "<br>"; 
    }
}

echo "<br>";
echo "--- While Loop ---<br>";
$j = 0;
while ($j < $count) {
    $item = $tests[$j];

    if (is_bool($item)) {
        echo ($item ? "Yes" : "NO") . "<br>";
    } else {
        echo $item . "<br>"; 
    }

    $j++;
}

?>