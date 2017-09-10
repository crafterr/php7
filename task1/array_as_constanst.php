<?php
// php < 5.3
define("STALA",12);

// php >= 5.3
const STALA1 = 12;

// php >= 5.6
const APP_DIRS = ['app','incl','libs'];

// php = 7.0
define("APP_DIRS1",['app','incl','libs']);

echo '<pre>'; var_dump(APP_DIRS); echo '</pre>';
echo '<pre>'; var_dump(APP_DIRS1); echo '</pre>';

//unicode php7
echo "\u{2764}";
echo "\u{002764}";
echo "\u{260F}";
echo "\u{1F600}";
die();