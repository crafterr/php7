<?php
declare(strict_types=1);
function sum($a,$b) {
    echo  $a ." ".gettype($a)." + ";
    echo  $b ." ".gettype($b)." = ";
    $result = $a+$b;
    echo $result ." ".gettype($result);

}
echo "WITHOUT SCALAR HINTING <br />";
sum(2,3);
echo "<br />";
sum(2,"3");
echo "<br >";
sum("2.0","3.0");


function sum2(int $a, int $b) {
    echo $a ." ".gettype($a)." + ";
    echo $b ." ".gettype($b)." = ";
    $result = $a+$b;
    echo $result ." ".gettype($result);
}

function test(array $arr) {
    echo 'o dziala';
    return print_r($arr);
}

echo "<br />SCALAR HINTING <br />";
sum2(2,3);
echo "<br />";
sum2(2,"3");
echo "<br >";
sum2("3.6","3.6");

