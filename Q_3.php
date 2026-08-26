<?php
function sumArray($numbers) {
    $sum = 0;
    foreach ($numbers as $num){
        $sum += $num;
    }
    return $sum;
}
echo sumArray([5,55,555]);
?>