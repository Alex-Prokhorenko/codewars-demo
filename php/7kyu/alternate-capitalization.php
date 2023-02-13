<?php
/*
Given a string, capitalize the letters that occupy even indexes and odd indexes separately,
and return as shown below. Index 0 will be considered even.

For example, capitalize("abcdef") = ['AbCdEf', 'aBcDeF']. See test cases for more examples.

The input will be a lowercase string with no spaces.
*/

// My solution

function capitalize($s)
{
    $odd = '';
    $even = '';
    for ($i = 0; $i < strlen($s); $i++) {
        if ($i % 2 === 0) {
            $odd .= $s[$i];
            $even .= strtoupper($s[$i]);
        } else {
            $odd .= strtoupper($s[$i]);
            $even .= $s[$i];
        }
    }
    return [$even, $odd];
}
