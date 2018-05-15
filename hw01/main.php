<?php

include 'function.php';
include 'extra.php';

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

echo compareNumber(5),
    "\n",
    compareNumber(0),
    "\n",
    compareNumber(-2),
    "\n",
    compareNumber(3),
    "\n\n";

/****************/

$min = rand(0, 59);
echo getQuarter($min);
echo "\n\n";

/****************/

$year = 2000;
echo isLeapYear($year);
echo "\n\n";

/*****************/

$strNum = '385934';
echo isLuckyNumber($strNum);
echo "\n";

/***** extra task ************/

var_dump(compareCharacters("ZzZz", "ffPFF"));