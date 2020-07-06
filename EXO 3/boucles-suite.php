<?php

function compter_dizaine($maximum) {
    $start = 1;
    while ($start <= $maximum){
        echo "$start";
    echo "<br>";
    if($start % 10 == 0 && $start!=100)
        echo "Ceci est une dizaine <br>";
    else if ($start % 100 == 0)
        echo "Ceci est une centaine <br>";
        $start = $start + 1;
}
echo "$start";
}
compter_dizaine(100);
?>
