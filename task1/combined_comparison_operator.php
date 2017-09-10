<?php
/**
 * sortuje tablice po kluczu ocena
 * return $a<=>$b
 * zwroci 0 jesli rowne
 * zwroci -1 jesli a<b
 * zwroci 1 jesli a>b
 *
 */

$tab =  [
    ['name'=>'Adam','ocena'=>4],
    ['name'=>'Grzegorz','ocena'=>5],
    ['name'=>'Maciek','ocena'=>3],
    ['name'=>'Krzysiek','ocena'=>2],
    ['name'=>'Marek','ocena'=>1],
    ['name'=>'Damian','ocena'=>6],
    ['name'=>'Witek','ocena'=>4]
];

$tab2 = range(1,10);

rsort($tab2);
var_dump($tab2); die();


echo '<pre>'; var_dump($tab); echo '</pre>';

usort($tab, function($a,$b){
   //return $a['ocena'] <=> $b['ocena'];
   return $a['ocena'] > $b['ocena'];
});
echo '<pre>'; var_dump($tab); echo '</pre>';