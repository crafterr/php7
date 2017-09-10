<?php
$a = 1;
$b = 1;
var_dump($a);
var_dump($b);
if ($a === $b) {
    echo 'sa rowne';
}

function zwroc($a,$b):int {
    return $a<=>$b;
}

if (zwroc(1,1)==0) {
    echo 'tak jest rowne';
}


echo '<br />';

$watches =
[
      ['brand' => 'Swatch', 'price' => 50],
      ['brand' => 'Timex', 'price' => 5],
      ['brand' => 'Rolex', 'price' => 500]
];

echo '<pre>'; var_dump($watches); echo '</pre>';

function sort_by_price(array $watch1,array $watch2): int
{
    return $watch1['price'] <=> $watch2['price'];
}

usort($watches,function($a,$b) {
    return $a['price'] <=> $b['price'];
});

echo '<pre>'; var_dump($watches); echo '</pre>';