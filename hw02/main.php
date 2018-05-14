<?php
/*'var_test_text' в 'varTestText'*/

/**
 * @param $text:string
 * @return string
 */
function changeText($text)
{
    $arr = explode('_', $text);
    $arr = array_map(function ($el) {return ucfirst($el);}, $arr);
    $str = join('', $arr);
    return lcfirst($str);
}


$text = 'var_test_text';

echo changeText($text);
echo "\n\n";

/******************/

/**
 * @param $str:string
 * @return string
 */
function mb_reverse($str)
{
    $newStr = '';
    $arr = preg_split('##u', $str, null, PREG_SPLIT_NO_EMPTY);

    for ($i = count($arr) - 1; $i >= 0; $i--) {
        $newStr .= $arr[$i];
    }

    return $newStr;
}

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