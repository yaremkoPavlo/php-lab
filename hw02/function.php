<?php

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