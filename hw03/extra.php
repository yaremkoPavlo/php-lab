<?php

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

/*
[1,2,3,4,3,2,1]
[1,100,50,-51,1,1]
[20,10,-80,10,10,15,35]
[10,-80,10,10,15,35]
*/
$arr = [10,-80,10,10,15,35];
var_dump(findIndexOfArray($arr));

/************************/

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

/*
 * [ 1, 1, 1, 2, 1, 1 ]
 * [ 0, 0, 0.55, 0, 0 ]
 * [3,1,5,3,7,4,1,5,7]
 */

$arr = [3,1,5,3,7,4,1,5,7];
var_dump(findUniqueValue($arr));