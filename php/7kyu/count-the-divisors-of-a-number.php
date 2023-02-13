<?php
/*
Count the number of divisors of a positive integer n.

Random tests go up to n = 500000.

Note you should only return a number, the count of divisors.
*/

// My solution

function divisors($n)
{
    $count = 0;
    for ($i = 1; $i <= $n; $i++) {
        if ($n % $i === 0) {
            $count++;
        }
    }
    return $count;
}
