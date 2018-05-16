<?php

function duplicateValues($arr)
{
    $newArr = array();
    foreach ($arr as $val) {
        for ($i=0; $i < $val; $i++) {
            $newArr[] = $val;
        }
    }

    return $newArr;
}

function comparePrice($a, $b)
{
    if ($a['price'] === $b['price']) {
        return 0;
    }
    return ($a['price'] < $b['price']) ? -1 : 1;
}

function filterByTags($el)
{
    if (!array_key_exists('tags', $el)) {
        return false;
    }
    return in_array('php', $el['tags']);
}
