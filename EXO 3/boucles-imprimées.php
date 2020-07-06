  
<?php
 
function clock()
{
 for ( $hour = 0; $hour < 24; $hour +=1) {
 for ($minute = 00; $minute <= 59; $minute += 1) {
     if ($hour<10)
        echo "0";
    echo "$hour : ";
    if ($minute < 10)
    echo "0";
    echo "$minute <br>";

 
 }
 }
}
 
clock();
?>
