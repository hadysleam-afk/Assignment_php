<?php 
function RouteBubble($arr){
    $count = count($arr);

    for($i = 0; $i < $count -1; $i++){

        for($j = 0 ; $j < $count - $i - 1; $j++){

            if($arr[$j] > $arr[$j + 1]){

                $swapping = $arr[$j];
                $arr[$j] = $arr[$j+1];
                $arr[$j+1]= $swapping;
          }
        }
    }
    return $arr;
}
$numbers = array(4888888, 48888, 4888888888, 4888, 488, 48, 0);
$sortedNumbers = RouteBubble($numbers);

echo "Array after Bubble Sort: <br>";
print_r($sortedNumbers);

?>