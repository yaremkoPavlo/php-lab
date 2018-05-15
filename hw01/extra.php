<?php

/**
"AD","BC" -> equal
"AD","DD" -> not equal
"gf","FG" -> equal
"zz1","" -> equal
"ZzZz", "ffPFF" -> equal
"kl", "lz" -> not equal
null, "" -> equal
 */

/**
 * @param $ch1:string
 * @param $ch2:string
 * @return boolean
 */
function compareCharacters($ch1, $ch2)
{
    $sum1 = getSumCharacterCode($ch1);
    $sum2 = getSumCharacterCode($ch2);

    return $sum1 === $sum2;
}

/**
 * @param $ch:string
 * @return int
 */
function getSumCharacterCode($ch)
{
    $sum = 0;
    $ch = strtoupper($ch);
    for ($i=0; $i < strlen($ch); $i++) {
        $sum += ord($ch[$i]);
    }

    return $sum;

}
