<?php

include 'function.php';
include 'extra.php';

$text = 'var_test_text';
echo changeText($text);
echo "\n\n";

/******************/

$str = 'ФЫВА олдж';
$arr = mb_split(' ', $str);
$arr = array_map('mb_reverse', $arr);
$result = implode(' ', $arr);
var_dump($result);

/***********************/

$a = [342, 55, 33, 123, 66, 63, 9];
$pattern = "/3/";

foreach ($a as $value) {
    if (preg_match($pattern, $value) === 1) {
        echo $value;
        echo "\n";
    }
}

/***********************/

$count = 0;

foreach ($a as $value) {
    if (preg_match_all($pattern, $value, $matches) > 0) {
        $count += count($matches[0]);
    }
}

var_dump($count);
echo "\n";

/******** extra task *********/

var_dump(madeBandName('alask'));
echo "\n";
var_dump(changeText('ATTGC'));