<?php
/*
Write a function which calculates the average of the numbers in a given list.

Note: Empty arrays should return 0.
*/

// My solution

function find_average($array): float
{
    return empty($array) ? 0 : array_sum($array) / count($array);
}
