<?php

function greeting($first = "Japan", $id = 0, $n1 = 0, $n2 = 0, $poscode){

    $n = $n1 + $n2;
    echo "Welcome to $first : $id : $n";
}
$countries = "Thailand";
$idc = 44;
greeting($countries, $idc,10,5,"th"); //call function
?>