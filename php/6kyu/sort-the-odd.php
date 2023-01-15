<?php
/*
You will be given an array of numbers.
You have to sort the odd numbers in ascending order while leaving the even numbers at their original positions.
Examples

[7, 1]  =>  [1, 7]
[5, 8, 6, 3, 4]  =>  [3, 8, 6, 5, 4]
[9, 8, 7, 6, 5, 4, 3, 2, 1, 0]  =>  [1, 8, 3, 6, 5, 4, 7, 2, 9, 0]
*/

// My solution

function sortArray(array $arr) : array
{
    $odd = array_filter($arr, function($num)
    {
        return $num % 2 !== 0;
    });
    sort($odd);
    foreach ($arr as $item) {
        $odd[] = $item % 2 ? array_shift($odd) : $item;
    }
    return $odd;
}
