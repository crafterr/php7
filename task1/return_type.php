<?php
//declare(strict_types=1);
function sum($a, $b) {
    return $a + $b;
}

echo sum(2,3) . gettype(sum(2,3))."<br />";
echo sum("2","3") . gettype(sum("2","3"))."<br />";
echo sum(2.4,3.4) . gettype(sum(2.4,3.4))."<br />";


function sum2($a,$b):int {
        return $a + $b;
}

echo sum2(2,3) . gettype(sum2(2,3))."<br />";
echo sum2("2","3") . gettype(sum2("2","3"))."<br />";
echo sum2(2.4,3.4) .  gettype(sum2(2.4,3.4))."<br />";
