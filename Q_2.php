<?php
function calc(float$num1, float$num2) {
    $multiply = $num1 * $num2;
    $subtract = $num1 - $num2;

    if ($num2 != 0){
        $div =$num1/$num2;
        }
        else{
        $div= "لا يمكن القسمة على صفر" ;
    }
    echo "حاصل الضرب: " . $multiply . "<br>";
    echo "الفرق بينهما: " . $subtract . "<br>";
    echo "خارج القسمة: " . $div . "<br>";
    }
    calc(10 ,2);
?>