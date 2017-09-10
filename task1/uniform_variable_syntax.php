<?php
$car = 'person';
$person = 'Adam';

echo $car; //person

echo $$car; //Adam

$name = 'car';
$car  = ['name' => 'Jetta','year' => '2017'];

var_dump($$name);

echo $$name['name']; //php 5 return error
echo $$name['name']; //php 7 return Jetta

$name = 'car2';
$car2 = [
    'type' => [
        'brand' => 'Volkswagen','model'=>'Jetta'
    ],
    'year'=>'2010'
];
echo '<pre>'; var_dump($car2); echo '</pre>';

echo $$name['type']['model'];

$test = 'test';
$stdclass = new stdClass();
$stdclass->$test = ['name'=>'adam'];

echo $stdclass->$test['name'];
