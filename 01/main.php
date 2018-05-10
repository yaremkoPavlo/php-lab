<?php

$text1 = 'Hello';
$text2 = 'World';

echo $text1 . ' ' . $text2,
    "\n\n";

/****************/

$var = 'hello';

echo $var[0],
    "\n",
    $var[1],
    "\n",
    $var[4],
    "\n\n";

/****************/

function compareNumber($a)
{
    if ($a > 0 && $a < 5) {
        return 'virno';
    } else {
        return 'nevirno';
    }
}

echo compareNumber(5),
    "\n",
    compareNumber(0),
    "\n";
