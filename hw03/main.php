<?php

include 'function.php';

$arr = [1, 3, 2, 4];
print_r (duplicateValues($arr));

/******************/

$temperatures = array(33, 15, 17, 20, 23, 23, 28, 40, 21, 19, 31, 18, 30, 31, 28, 23, 19, 28, 27, 30, 39, 17, 17, 20, 19, 23, 28, 30, 34, 28);
$temperaturesAvg = sizeof($temperatures)/2 - 1;

sort($temperatures);

echo '3 min values is: ';
print_r(array_slice($temperatures, 0, 3));

echo '3 max values is: ';
print_r(array_slice($temperatures, -3, 3));

echo '3 avg values is: ';
print_r(array_slice($temperatures, $temperaturesAvg, 3));

/*************************/

$books = [
    [
        'name' => 'Learning php, mysql & JavaScript',
        'author' => 'Robin Nixon',
        'price' => 30,
        'tags' => ['php', 'javascript', 'mysql']
    ],
    [
        'name' => 'Php for the Web: Visual QuickStart Guide',
        'author' => 'Larry Ullman',
        'price' => 25,
        'tags' => ['php']
    ],
    [
        'name' => 'pHp and MySqL for Dynamic Web Sites',
        'author' => 'Larry Ullman',
        'price' => 14.39,
        'tags' => ['php', 'mysql']
    ],
    [
        'name' => 'Modern PhP: New Features and Good Practices',
        'author' => 'Josh Lockhart',
        'price' => 24,
        'tags' => ['php']
    ],
    [
        'name' => 'JavaScript and JQuery: Interactive Front-End Web Development',
        'author' => 'Jon Duckett',
        'price' => 20,
        'tags' => ['javascript', 'jquery']
    ],
    [
        'name' => 'Miss Peregrine\'s Home for Peculiar Children',
        'author' => 'Ransom Riggs',
        'price' => 8.18
    ]
];
echo 'sort array by price. result is:';
usort($books, 'comparePrice');
print_r($books);
echo "\n";

echo 'filtered array by tag. result is:';
$filteredArr = array_values(array_filter($books, 'filterByTags'));

print_r($filteredArr);