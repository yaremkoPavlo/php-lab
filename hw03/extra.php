<?php

/**
 * @param array $arr
 * @return int
 */
function findIndexOfArray($arr)
{
    for ($i = 1; $i < sizeof($arr) - 1 ; $i++) {
        $val1 = array_sum(array_slice($arr, 0, $i));
        $val2 = array_sum(array_slice($arr, $i+1));
        if ($val1 === $val2) {
            return $i;
        }
    }
    return -1;
}

/**
 * @param array $arr
 * @return number
 */
function findUniqueValue($arr)
{
    $count = 0;
    sort($arr);
    for ($i = 0; $i < sizeof($arr); $i++) {
        if ($arr[$i] === $arr[$i+1]) {
            $count++;
        } elseif ($count > 0) {
            $count = 0;
        } else {
            return $arr[$i];
        }
    }
}
