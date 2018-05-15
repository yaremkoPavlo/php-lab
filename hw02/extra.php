<?php

/**
 * @param $name:string
 * @return string
 */
function madeBandName($name)
{
    if ($name[0] === $name[strlen($name) - 1]) {
        $newName = ucfirst($name) . ltrim($name, "$name[0]");
    } else {
        $newName = 'The ' . ucfirst($name);
    }

    return $newName;
}

/**
 * @param $text:string
 * @param $map:array
 * @return string
 */
function changeTextMap($text, $map)
{
    $flipMap = array_flip($map);
    $fullMap = array_merge($map, $flipMap);
    return strtr($text, $fullMap);
}
