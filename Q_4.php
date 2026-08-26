<?php
$films=array("Fast","Predestination","Persuit","Prestige","avatar"); 
$keyword="avatar"; 
$found = "no";

foreach ($films as $film){
    if($film ==$keyword ){
        $found = "yes";
        break;

    }
}
echo $found;
?>