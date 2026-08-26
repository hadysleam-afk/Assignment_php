<?php 
require_once 'Q_4.php';
$counts = array_count_values($films);
echo "<br> :عدد التكرار الفيلم هو ".$counts[$keyword]; 
?>