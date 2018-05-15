<?php

function madeBandName($name)
{
    if ($name[0] === $name[strlen($name) - 1]) {
        $newName = ucfirst($name) . ltrim($name, "$name[0]");
    } else {
        $newName = 'The ' . ucfirst($name);
    }

    return $newName;
}
var_dump(madeBandName('alask'));

function changeText($text)
{
    $new = '';
    $map = ['A' => 'T', 'C' => 'G'];
    $pattern = ['/A/', '/T/', '/C/', '/G/'];
    $replacement = ['T', 'A', 'G', 'C'];

    return $new;
}

var_dump(changeText('ATTGC'));