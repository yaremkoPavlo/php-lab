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
 * @return string
 */
function changeText($text)
{
    $new = '';
    $map = ['A' => 'T', 'C' => 'G'];
    $pattern = ['/A/', '/T/', '/C/', '/G/'];
    $replacement = ['T', 'A', 'G', 'C'];

    return $new;
}
