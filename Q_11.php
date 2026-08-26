<?php

$arr1 = array('a', 'b', 'c', 'd'); 
$arr2 = array('c', 'd', 'e', 'f'); 

$common = array();
foreach ($arr1 as $val) {
    if (in_array($val, $arr2)) {
        $common[] = $val;
    }
}

echo implode(" - ", $common);
?>