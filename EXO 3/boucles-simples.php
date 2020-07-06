<?php

function compter($maximum) {
    $start = 1;
    while ($start <= $maximum){
        echo "$start";
    $start = $start + 1;
    echo "<br>";}
    
}

function compter_for($maximum) {
    for ($start = 1; $start <= $maximum; $start = $start +1) {
        echo "$start";
        echo "<br>";}
}

compter(10);
compter_for(10);
?>
