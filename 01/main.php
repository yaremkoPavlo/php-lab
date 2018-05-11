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

/**
 * @param $a:integer
 * @return string
 */
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
    "\n",
    compareNumber(-2),
    "\n",
    compareNumber(3),
    "\n\n";

/****************/

$min = rand(0, 59);

if ($min < 15) {
    echo 'First';
} elseif ($min < 30) {
    echo 'Second';
} elseif ($min < 45) {
    echo 'Third';
} else {
    echo 'Fourth';
}

echo "\n\n";

/****************/

$year = 2000;

function isIntercalaryYear($year)
{
    if (($year % 4 === 0 && $year % 100 !== 0) || ($year % 400 === 0)) {
        return 'yes';
    } else {
        return 'no';
    }
}

echo isIntercalaryYear($year);
echo "\n\n";

/*****************/

$strNum = '385934';

/**
 * @param $str:string
 * @param $i:integer
 * @return integer
 */
function summThreeNumber($str, $i)
{
    return intval($str[$i]) + intval($str[$i + 1]) + intval($str[$i + 2]);
}

if (summThreeNumber($strNum, 0) === summThreeNumber($strNum, 3)) {
    echo 'you have lucky number!';
} else {
    echo 'is it no lucky number :(';
}

echo "\n";