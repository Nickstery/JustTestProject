<?php
/**
 * Created by PhpStorm.
 * User: viktor
 * Date: 05.05.16
 * Time: 21:17
 */




$min = 0;
$max = 5;


for ($h = 1; $h <= 20; $h++) {
    $massiv[$h] = rand($min, $max);
}

print_r($massiv);
echo "<br>";
$maxindex = -1;
for ($o = 20; $o >=0; $o--){
    if ($massiv[$o] == 1){
        echo $o;
        break;
        //echo "<br>INDEX FOUND AT ".$o."<br>";
    }
}

//echo $maxindex;




/*for($i = 0; $i < 10; $i++){
    echo "Index".($i + 100)." is: ".$i."<br>";
}
