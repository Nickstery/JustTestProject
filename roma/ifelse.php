<?php
/**
 * Created by PhpStorm.
 * User: viktor
 * Date: 05.05.16
 * Time: 22:02
 */

$a1 = rand(1,3);
$a2 = rand(1,3);

echo 'A1 = '.$a1."<br>";
echo 'A2 = '.$a2."<br>";
echo '<br>';
if ($a1 > $a2)
{
    print_r ($a1);
} else if ($a2> $a1) {
    print_r ($a2);
} else {
    print_r ($a1 + $a2);
}
