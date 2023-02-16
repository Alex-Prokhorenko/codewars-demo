<?php
/*
Find the sum of the odd numbers within an array, after cubing the initial integers.
The function should return undefined/None/nil/NULL if any of the values aren't numbers.
*/

// My solution

function cube_odd(array $a)
{
    $result = 0;
    foreach ($a as $elem) {
        if (!is_int($elem)) return null;
        $result += $elem % 2 !== 0 ? $elem ** 3 : 0;
    }
    return $result;
}
