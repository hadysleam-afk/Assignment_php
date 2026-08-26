<?php
function RouteRandomPass($length) {
    $chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $pass = '';
    
    $maxIndex = strlen($chars) - 1;

    for ($i = 0; $i < $length; $i++) {
    
        $randomIndex = rand(0, $maxIndex);
        
    
        $pass .= $chars[$randomIndex];
    }

    return $pass;
}

echo "<strong>Random Password (8 chars):</strong> " . RouteRandomPass(8) . "<br>";

echo "<strong>Random Password (12 chars):</strong> " . RouteRandomPass(12);

?>