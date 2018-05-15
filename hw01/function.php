<?php

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

/**
 * @param $min:integer
 * @return string
 */
function getQuarter($min)
{
    if ($min < 15) {
        return 'First';
    } elseif ($min < 30) {
        return 'Second';
    } elseif ($min < 45) {
        return 'Third';
    } else {
        return 'Fourth';
    }
}

/**
 * @param $year:integer
 * @return string
 */
function isLeapYear($year)
{
    if (($year % 4 === 0 && $year % 100 !== 0) || ($year % 400 === 0)) {
        return 'yes';
    } else {
        return 'no';
    }
}

/**
 * @param $str:string
 * @param $i:integer
 * @return integer
 */
function sumThreeNumber($str, $i)
{
    return intval($str[$i]) + intval($str[$i + 1]) + intval($str[$i + 2]);
}

/**
 * @param $strNum:string :6-number string
 * @return string
 */
function isLuckyNumber($strNum)
{
    if (sumThreeNumber($strNum, 0) === sumThreeNumber($strNum, 3)) {
        return 'you have lucky number!';
    } else {
        return 'is it no lucky number :(';
    }
}
