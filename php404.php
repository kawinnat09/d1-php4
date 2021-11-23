<?php

function inc(&$i){
    echo ++$i;
}

$i = 10;
inc($i);

?>