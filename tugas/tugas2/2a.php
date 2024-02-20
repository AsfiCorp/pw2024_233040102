<?php 
$x = "Athaillah";
$y = "Sulthan";

for ($i = 1; $i <= 100; $i++){
if ( $i % 3 === 0 && $i % 5 === 0) {
        echo "$x $y <br>";
} else if ($i % 3 === 0) {
        echo "$x <br>";
    } else if ($i % 5 === 0) {
        echo "$y <br>";
    } else {
        echo " $i <br>";
    }

};



?>